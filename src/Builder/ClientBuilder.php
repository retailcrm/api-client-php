<?php

/**
 * PHP version 7.3
 *
 * @category ClientBuilder
 * @package  RetailCrm\Api\Builder
 */

namespace RetailCrm\Api\Builder;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Client;
use RetailCrm\Api\Component\Transformer\RequestTransformer;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Exception\Client\BuilderException;
use RetailCrm\Api\Factory\ApiExceptionFactory;
use RetailCrm\Api\Factory\RequestPipelineFactory;
use RetailCrm\Api\Factory\ResponsePipelineFactory;
use RetailCrm\Api\Interfaces\ApiExceptionFactoryAwareInterface;
use RetailCrm\Api\Interfaces\BuilderInterface;
use RetailCrm\Api\Interfaces\EventDispatcherAwareInterface;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Api\Interfaces\HandlerInterface;
use RetailCrm\Api\Interfaces\PsrFactoriesAwareInterface;
use RetailCrm\Api\Interfaces\RequestTransformerInterface;
use RetailCrm\Api\Interfaces\ResponseTransformerInterface;
use RetailCrm\Api\Interfaces\SerializerAwareInterface;
use RetailCrm\Api\Traits\EventDispatcherAwareTrait;

/**
 * Class ClientBuilder
 *
 * @category ClientBuilder
 * @package  RetailCrm\Api\Builder
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class ClientBuilder implements BuilderInterface, EventDispatcherAwareInterface
{
    use EventDispatcherAwareTrait;

    /** @var string */
    private $apiUrl;

    /** @var HandlerInterface|null */
    private $authenticator;

    /** @var ClientInterface|null */
    private $httpClient;

    /** @var \Psr\Log\LoggerInterface|null */
    private $debugLogger;

    /** @var RequestTransformerInterface|null */
    private $requestTransformer;

    /** @var \RetailCrm\Api\Interfaces\ResponseTransformerInterface|null */
    protected $responseTransformer;

    /** @var \RetailCrm\Api\Interfaces\FormEncoderInterface|null */
    private $formEncoder;

    /** @var \Psr\Http\Message\StreamFactoryInterface|null */
    private $streamFactory;

    /** @var \Psr\Http\Message\RequestFactoryInterface|null */
    private $requestFactory;

    /** @var \Psr\Http\Message\UriFactoryInterface|null */
    private $uriFactory;

    /** @var \RetailCrm\Api\Factory\ApiExceptionFactory|null */
    private $apiExceptionFactory;

    /** @var \RetailCrm\Api\Interfaces\HandlerInterface[] */
    private $requestHandlers = [];

    /** @var \RetailCrm\Api\Interfaces\HandlerInterface[] */
    private $responseHandlers = [];

    /**
     * API URL. Looks like this: "https://test.retailcrm.pro/"
     *
     * @param string $apiUrl
     *
     * @return ClientBuilder
     */
    public function setApiUrl(string $apiUrl): ClientBuilder
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    /**
     * Request authenticator to append into request transformer pipeline.
     *
     * Do not use it if you already added a proper authenticator in the pipeline manually.
     * You can use this method to drop authenticator from client builder (use null).
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface|null $authenticator
     *
     * @return ClientBuilder
     */
    public function setAuthenticatorHandler(?HandlerInterface $authenticator): ClientBuilder
    {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Set your PSR-18 HTTP client.
     *
     * Service discovery will be used if no client has been provided.
     *
     * @param \Psr\Http\Client\ClientInterface|null $httpClient
     *
     * @return ClientBuilder
     */
    public function setHttpClient(?ClientInterface $httpClient): ClientBuilder
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * Set debug logger.
     *
     * The provided logger will be used to record all requests and responses.
     * This feature consumes a lot of resources and shouldn't be used in production.
     *
     * @param \Psr\Log\LoggerInterface|null $debugLogger
     *
     * @return ClientBuilder
     */
    public function setDebugLogger(?LoggerInterface $debugLogger): ClientBuilder
    {
        $this->debugLogger = $debugLogger;
        return $this;
    }

    /**
     * Set request transformer into API client.
     *
     * You can use this method to set your request transformer which will execute the pipeline.
     * The default request transformer doesn't do anything besides calling provided chain of handlers.
     *
     * @param \RetailCrm\Api\Interfaces\RequestTransformerInterface|null $requestTransformer
     *
     * @return ClientBuilder
     */
    public function setRequestTransformer(?RequestTransformerInterface $requestTransformer): ClientBuilder
    {
        $this->requestTransformer = $requestTransformer;
        return $this;
    }

    /**
     * Set response transformer into API client.
     *
     * You can use this method to set your response transformer which will execute the pipeline.
     * The default response transformer doesn't do anything besides calling provided chain of handlers.
     * The serializer instance for the request pipeline can be inferred from the provided FormEncoder instance.
     *
     * @param \RetailCrm\Api\Interfaces\ResponseTransformerInterface|null $responseTransformer
     *
     * @return ClientBuilder
     */
    public function setResponseTransformer(?ResponseTransformerInterface $responseTransformer): ClientBuilder
    {
        $this->responseTransformer = $responseTransformer;
        return $this;
    }

    /**
     * Set form encoder into API client.
     *
     * Form encoder is a vital part of the API client. Its purpose is to transform provided request models
     * into form-data. The result will be used as a query or POST body (depends on request type).
     *
     * @param \RetailCrm\Api\Interfaces\FormEncoderInterface $formEncoder
     *
     * @return ClientBuilder
     */
    public function setFormEncoder(FormEncoderInterface $formEncoder): ClientBuilder
    {
        $this->formEncoder = $formEncoder;
        return $this;
    }

    /**
     * Sets PSR-17 compatible stream factory. You can skip this step if you want to use service discovery.
     *
     * @param \Psr\Http\Message\StreamFactoryInterface|null $streamFactory
     *
     * @return ClientBuilder
     */
    public function setStreamFactory(?StreamFactoryInterface $streamFactory): ClientBuilder
    {
        $this->streamFactory = $streamFactory;
        return $this;
    }

    /**
     * Sets PSR-17 compatible request factory. You can skip this step if you want to use service discovery.
     *
     * @param \Psr\Http\Message\RequestFactoryInterface|null $requestFactory
     *
     * @return ClientBuilder
     */
    public function setRequestFactory(?RequestFactoryInterface $requestFactory): ClientBuilder
    {
        $this->requestFactory = $requestFactory;
        return $this;
    }

    /**
     * Sets PSR-17 compatible URI factory. You can skip this step if you want to use service discovery.
     *
     * @param \Psr\Http\Message\UriFactoryInterface|null $uriFactory
     *
     * @return ClientBuilder
     */
    public function setUriFactory(?UriFactoryInterface $uriFactory): ClientBuilder
    {
        $this->uriFactory = $uriFactory;
        return $this;
    }

    /**
     * Appends an additional request handler into the request processing chain.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
     *
     * @return ClientBuilder
     */
    public function appendRequestHandler(HandlerInterface $handler): ClientBuilder
    {
        $this->requestHandlers[] = $handler;
        return $this;
    }

    /**
     * Appends an additional response handler into the response processing chain.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
     *
     * @return ClientBuilder
     */
    public function appendResponseHandler(HandlerInterface $handler): ClientBuilder
    {
        $this->responseHandlers[] = $handler;
        return $this;
    }

    /**
     * Appends additional request handlers into the request processing chain.
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface[] $handlers
     *
     * @return ClientBuilder
     */
    public function appendRequestHandlers(array $handlers): ClientBuilder
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
     * @return ClientBuilder
     */
    public function appendResponseHandlers(array $handlers): ClientBuilder
    {
        foreach ($handlers as $handler) {
            $this->appendResponseHandler($handler);
        }

        return $this;
    }

    /**
     * Builds client with provided dependencies.
     *
     * @inheritDoc
     */
    public function build(): Client
    {
        $this->validateBuilder();

        if (
            null !== $this->authenticator &&
            null !== $this->requestTransformer &&
            null !== $this->requestTransformer->getHandler()
        ) {
            $this->requestTransformer->getHandler()->append($this->authenticator);
        }

        if (null === $this->requestTransformer) {
            $this->requestTransformer = $this->buildRequestTransformer();
        }

        if (null === $this->responseTransformer) {
            $this->responseTransformer = $this->buildResponseTransformer();
        }

        $this->appendAdditionalRequestHandlers();
        $this->appendAdditionalResponseHandlers();

        return new Client(
            $this->apiUrl,
            $this->httpClient ?: Psr18ClientDiscovery::find(),
            $this->requestTransformer,  // @phpstan-ignore-line
            $this->responseTransformer, // @phpstan-ignore-line
            $this->streamFactory ?: Psr17FactoryDiscovery::findStreamFactory(),
            $this->eventDispatcher,
            $this->debugLogger
        );
    }

    /**
     * Check if builder is ready to build a Client instance.
     *
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    private function validateBuilder(): void
    {
        if (empty($this->apiUrl)) {
            throw new BuilderException('apiUrl must not be empty', ['apiUrl']);
        }

        if (empty($this->authenticator) && empty($this->requestTransformer)) {
            throw new BuilderException(
                'Authenticator or RequestTransformer must be present',
                ['authenticator', 'requestTransformer']
            );
        }
    }

    /**
     * Appends additional request handlers into the request and response processor chain (if needed).
     *
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    private function appendAdditionalRequestHandlers(): void
    {
        if (
            null !== $this->requestTransformer &&
            null !== $this->requestTransformer->getHandler() &&
            count($this->requestHandlers) > 0
        ) {
            foreach ($this->requestHandlers as $handler) {
                if ($handler instanceof PsrFactoriesAwareInterface) {
                    $handler->setRequestFactory($this->requestFactory ?: Psr17FactoryDiscovery::findRequestFactory());
                    $handler->setStreamFactory($this->streamFactory ?: Psr17FactoryDiscovery::findStreamFactory());
                    $handler->setUriFactory($this->uriFactory ?: Psr17FactoryDiscovery::findUriFactory());
                }
            }

            $this->requestTransformer->getHandler()->append(static::buildHandlersChain($this->requestHandlers));
        }
    }

    /**
     * Appends additional response handlers into the request and response processor chain (if needed).
     *
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    private function appendAdditionalResponseHandlers(): void
    {
        if (
            null !== $this->responseTransformer &&
            null !== $this->responseTransformer->getHandler() &&
            count($this->responseHandlers) > 0
        ) {
            foreach ($this->responseHandlers as $handler) {
                if ($handler instanceof SerializerAwareInterface && null !== $this->formEncoder) {
                    $handler->setSerializer($this->formEncoder->getSerializer());
                }

                if ($handler instanceof ApiExceptionFactoryAwareInterface && null !== $this->apiExceptionFactory) {
                    $handler->setApiExceptionFactory($this->apiExceptionFactory);
                }

                if ($handler instanceof EventDispatcherAwareInterface) {
                    $handler->setEventDispatcher($this->eventDispatcher);
                }
            }

            $this->responseTransformer->getHandler()->append(static::buildHandlersChain($this->responseHandlers));
        }
    }

    /**
     * Builds RequestTransformer with default pipeline and authenticator.
     *
     * @return \RetailCrm\Api\Component\Transformer\RequestTransformer
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    private function buildRequestTransformer(): RequestTransformer
    {
        if (null === $this->formEncoder) {
            throw new BuilderException(
                "You must provide a FormEncoder instance in order to delegate " .
                "RequestTransformer instantiation to the ClientBuilder."
            );
        }

        if (null === $this->authenticator) {
            throw new BuilderException(
                "You must provide an authenticator handler instance in order to delegate " .
                "RequestTransformer instantiation to the ClientBuilder."
            );
        }

        return new RequestTransformer(
            RequestPipelineFactory::createDefaultPipeline(
                $this->formEncoder,
                $this->uriFactory ?: Psr17FactoryDiscovery::findUriFactory(),
                $this->requestFactory ?: Psr17FactoryDiscovery::findRequestFactory(),
                $this->streamFactory ?: Psr17FactoryDiscovery::findStreamFactory(),
                $this->authenticator
            )
        );
    }

    /**
     * Builds ResponseTransformer.
     *
     * @return \RetailCrm\Api\Component\Transformer\ResponseTransformer
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    private function buildResponseTransformer(): ResponseTransformer
    {
        if (null === $this->formEncoder) {
            throw new BuilderException(
                "You must provide a FormEncoder instance in order to delegate " .
                "ResponseTransformer instantiation to the ClientBuilder."
            );
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

    /**
     * Connect all handlers in the array into chain, return first handler.
     *
     * @param HandlerInterface[] $handlers
     *
     * @return \RetailCrm\Api\Interfaces\HandlerInterface
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    private static function buildHandlersChain(array $handlers): HandlerInterface
    {
        if (empty($handlers)) {
            throw new BuilderException('Supplied handlers chain must contain at least one handler');
        }

        if (1 === count($handlers)) {
            return $handlers[0];
        }

        for ($i = 0, $iMax = count($handlers) - 1; $i < $iMax; $i++) {
            $handlers[$i]->setNext($handlers[$i + 1]);
        }

        return $handlers[0];
    }
}
