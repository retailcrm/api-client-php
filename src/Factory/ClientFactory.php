<?php

/**
 * PHP version 7.3
 *
 * @category ClientFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Doctrine\Common\Cache\Cache;
use Psr\EventDispatcher\EventDispatcherInterface;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Client;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Exception\Client\BuilderException;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;
use RetailCrm\Api\Interfaces\ClientFactoryInterface;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
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
 * @category ClientFactory
 * @package  RetailCrm\Api\Factory
 */
class ClientFactory implements ClientFactoryInterface
{
    use EventDispatcherAwareTrait;

    /** @var string|null */
    private $cacheDir;

    /** @var \Doctrine\Common\Cache\Cache|null */
    private $cache;

    /** @var \RetailCrm\Api\Interfaces\FormEncoderInterface|null */
    private $formEncoder;

    /** @var \RetailCrm\Api\Interfaces\ResponseTransformerInterface|null */
    private $responseTransformer;

    /** @var \RetailCrm\Api\Factory\ApiExceptionFactory|null */
    private $apiExceptionFactory;

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
     * @param \Doctrine\Common\Cache\Cache $cache
     *
     * @return ClientFactory
     */
    public function setCache(Cache $cache): ClientFactory
    {
        $this->cache = $cache;
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
