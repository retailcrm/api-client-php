<?php

/**
 * PHP version 7.3
 *
 * @category ClientFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Psr\Cache\CacheItemPoolInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Client;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Exception\Client\BuilderException;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;
use RetailCrm\Api\Interfaces\ClientFactoryInterface;
use RetailCrm\Api\Interfaces\EventDispatcherAwareInterface;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Api\Interfaces\HandlerInterface;
use RetailCrm\Api\Interfaces\ResponseTransformerInterface;
use RetailCrm\Api\Traits\EventDispatcherAwareTrait;

/**
 * Class ClientFactory.
 *
 * ClientFactory will create any amount of clients with provided credentials.
 * The cache will be used if it was provided before instantiating any client.
 *
 * This factory should be instantiated using DI, like `symfony/dependency-injection`. Cache implementation can be
 * injected during factory instantiation (it's optional, but should be used if you care about performance).
 *
 * FormEncoder instance with all underlying dependencies and ResponseTransformer will be shared between
 * Client instances. RequestTransformer with handlers pipeline will not be shared between clients because one
 * of the handlers will be authenticator, which is supposed to be unique between Clients.
 *
 * Service configuration example for Symfony (`symfony/dependency-injection`):
 * ```yaml
 * RetailCrm\Api\Interfaces\ClientFactoryInterface:
 *   class: 'RetailCrm\Api\Factory\ClientFactory'
 *   calls:
 *     - setCacheDir: ['%kernel.cache_dir%']
 *     - setEventDispatcher: ['@event_dispatcher']
 * ```
 *
 * You also can set a LoggerInterface instance for debug purposes:
 * ```yaml
 * RetailCrm\Api\Interfaces\ClientFactoryInterface:
 *   class: 'RetailCrm\Api\Factory\ClientFactory'
 *   calls:
 *     - setCacheDir: ['%kernel.cache_dir%']
 *     - setEventDispatcher: ['@event_dispatcher']
 *     - setDebugLogger: ['@logger']
 * ```
 *
 * @category ClientFactory
 * @package  RetailCrm\Api\Factory
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ClientFactory implements ClientFactoryInterface, EventDispatcherAwareInterface
{
    use EventDispatcherAwareTrait;

    /** @var string|null */
    private $cacheDir;

    /** @var CacheItemPoolInterface|null */
    private $cache;

    /** @var \Psr\Log\LoggerInterface */
    private $debugLogger;

    /** @var \Psr\Http\Client\ClientInterface */
    private $httpClient;

    /** @var \Psr\Http\Message\StreamFactoryInterface|null */
    private $streamFactory;

    /** @var \Psr\Http\Message\RequestFactoryInterface|null */
    private $requestFactory;

    /** @var \Psr\Http\Message\UriFactoryInterface|null */
    private $uriFactory;

    /** @var \RetailCrm\Api\Interfaces\FormEncoderInterface|null */
    private $formEncoder;

    /** @var \RetailCrm\Api\Interfaces\ResponseTransformerInterface|null */
    private $responseTransformer;

    /** @var \RetailCrm\Api\Factory\ApiExceptionFactory|null */
    private $apiExceptionFactory;

    /** @var \RetailCrm\Api\Interfaces\HandlerInterface[] */
    private $requestHandlers = [];

    /** @var \RetailCrm\Api\Interfaces\HandlerInterface[] */
    private $responseHandlers = [];

    /**
     * Sets cache directory which will be used to store metadata cache.
     *
     * @param string $cacheDir
     *
     * @return ClientFactory
     */
    public function setCacheDir(string $cacheDir): ClientFactory
    {
        $this->cacheDir = $cacheDir;
        return $this;
    }

    /**
     * Sets cache implementation which will be used to store metadata cache.
     *
     * @param \Psr\Cache\CacheItemPoolInterface $cache
     *
     * @return ClientFactory
     */
    public function setCache(CacheItemPoolInterface $cache): ClientFactory
    {
        $this->cache = $cache;
        return $this;
    }

    /**
     * Sets debug logger
     *
     * @param \Psr\Log\LoggerInterface $debugLogger
     *
     * @return ClientFactory
     */
    public function setDebugLogger(LoggerInterface $debugLogger): ClientFactory
    {
        $this->debugLogger = $debugLogger;
        return $this;
    }

    /**
     * Set your PSR-18 HTTP client.
     *
     * Service discovery will be used if no client has been provided.
     *
     * @param \Psr\Http\Client\ClientInterface $httpClient
     *
     * @return ClientFactory
     */
    public function setHttpClient(ClientInterface $httpClient): ClientFactory
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * Sets PSR-17 compatible stream factory. You can skip this step if you want to use service discovery.
     *
     * @param \Psr\Http\Message\StreamFactoryInterface|null $streamFactory
     *
     * @return ClientFactory
     */
    public function setStreamFactory(?StreamFactoryInterface $streamFactory): ClientFactory
    {
        $this->streamFactory = $streamFactory;
        return $this;
    }

    /**
     * Sets PSR-17 compatible request factory. You can skip this step if you want to use service discovery.
     *
     * @param \Psr\Http\Message\RequestFactoryInterface|null $requestFactory
     *
     * @return ClientFactory
     */
    public function setRequestFactory(?RequestFactoryInterface $requestFactory): ClientFactory
    {
        $this->requestFactory = $requestFactory;
        return $this;
    }

    /**
     * Sets PSR-17 compatible URI factory. You can skip this step if you want to use service discovery.
     *
     * @param \Psr\Http\Message\UriFactoryInterface|null $uriFactory
     *
     * @return ClientFactory
     */
    public function setUriFactory(?UriFactoryInterface $uriFactory): ClientFactory
    {
        $this->uriFactory = $uriFactory;
        return $this;
    }

    /**
     * Appends an additional request handler into the request processing chain.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
     *
     * @return ClientFactory
     */
    public function appendRequestHandler(HandlerInterface $handler): ClientFactory
    {
        $this->requestHandlers[] = $handler;
        return $this;
    }

    /**
     * Appends an additional handler into the response processing chain.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
     *
     * @return ClientFactory
     */
    public function appendResponseHandler(HandlerInterface $handler): ClientFactory
    {
        $this->responseHandlers[] = $handler;
        return $this;
    }

    /**
     * Appends additional request handlers into the request processing chain.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface[] $handlers
     *
     * @return ClientFactory
     */
    public function appendRequestHandlers(array $handlers): ClientFactory
    {
        foreach ($handlers as $handler) {
            $this->appendRequestHandler($handler);
        }

        return $this;
    }

    /**
     * Appends additional response handlers into the response processing chain.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface[] $handlers
     *
     * @return ClientFactory
     */
    public function appendResponseHandlers(array $handlers): ClientFactory
    {
        foreach ($handlers as $handler) {
            $this->appendResponseHandler($handler);
        }

        return $this;
    }

    /**
     * Instantiates a new instance of Client.
     *
     * @param string $apiUrl
     * @param string $apiKey
     *
     * @return \RetailCrm\Api\Client
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    public function createClient(string $apiUrl, string $apiKey): Client
    {
        if (null === $this->formEncoder) {
            $this->formEncoder = $this->buildFormEncoder();
        }

        if (null === $this->responseTransformer) {
            $this->responseTransformer = $this->buildResponseTransformer();
        }

        return (new ClientBuilder())
            ->setApiUrl($apiUrl)
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler($apiKey))
            ->setFormEncoder($this->formEncoder)
            ->setResponseTransformer($this->responseTransformer)
            ->setDebugLogger($this->debugLogger)
            ->setHttpClient($this->httpClient)
            ->setStreamFactory($this->streamFactory)
            ->setRequestFactory($this->requestFactory)
            ->setUriFactory($this->uriFactory)
            ->appendRequestHandlers($this->requestHandlers)
            ->appendResponseHandlers($this->responseHandlers)
            ->build();
    }

    /**
     * Builds FormEncoder instance.
     *
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    private function buildFormEncoder(): FormEncoderInterface
    {
        $builder = new FormEncoderBuilder();

        if (!empty($this->cacheDir)) {
            $builder->setCacheDir($this->cacheDir);
        }

        if (null !== $this->cache) {
            $builder->setCache($this->cache);
        }

        return $builder->build();
    }

    /**
     * Builds ResponseTransformer instance.
     *
     * @return \RetailCrm\Api\Interfaces\ResponseTransformerInterface
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    private function buildResponseTransformer(): ResponseTransformerInterface
    {
        if (null === $this->formEncoder) {
            throw new BuilderException('FormEncoder must exist to create ResponseTransformer.');
        }

        if (null === $this->apiExceptionFactory) {
            $this->apiExceptionFactory = new ApiExceptionFactory();
        }

        return new ResponseTransformer(ResponsePipelineFactory::createDefaultPipeline(
            $this->formEncoder->getSerializer(),
            $this->apiExceptionFactory,
            $this->eventDispatcher
        ));
    }
}
