<?php

/**
 * PHP version 7.3
 *
 * @category ClientBuilder
 * @package  RetailCrm\Api\Builder
 */

namespace RetailCrm\Api\Builder;

use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Client;
use RetailCrm\Api\Component\Transformer\RequestTransformer;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Exception\BuilderException;
use RetailCrm\Api\Factory\RequestPipelineFactory;
use RetailCrm\Api\Factory\ResponsePipelineFactory;
use RetailCrm\Api\Interfaces\BuilderInterface;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Api\Interfaces\HandlerInterface;
use RetailCrm\Api\Interfaces\RequestTransformerInterface;
use RetailCrm\Api\Interfaces\ResponseTransformerInterface;

/**
 * Class ClientBuilder
 *
 * @category ClientBuilder
 * @package  RetailCrm\Api\Builder
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ClientBuilder implements BuilderInterface
{
    /** @var string */
    private $apiUrl;

    /** @var ?HandlerInterface */
    private $authenticator;

    /** @var ?ClientInterface */
    private $httpClient;

    /** @var ?\Psr\Log\LoggerInterface */
    private $debugLogger;

    /** @var RequestTransformerInterface|null */
    private $requestTransformer;

    /** @var ?\RetailCrm\Api\Interfaces\ResponseTransformerInterface */
    protected $responseTransformer;

    /** @var ?\RetailCrm\Api\Interfaces\FormEncoderInterface */
    private $formEncoder;

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
     * Set your own PSR-18 HTTP client.
     *
     * Service discovery will be used if no client has been provided.
     *
     * @param \Psr\Http\Client\ClientInterface $httpClient
     *
     * @return ClientBuilder
     */
    public function setHttpClient(ClientInterface $httpClient): ClientBuilder
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
     * Builds client with provided dependencies.
     *
     * @inheritDoc
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function build(): Client
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

        return new Client(
            $this->apiUrl,
            $this->httpClient ?: Psr18ClientDiscovery::find(),
            $this->requestTransformer,
            $this->responseTransformer,
            $this->debugLogger
        );
    }

    /**
     * Builds RequestTransformer with default pipeline and authenticator.
     *
     * @return \RetailCrm\Api\Component\Transformer\RequestTransformer
     * @throws \RetailCrm\Api\Exception\BuilderException
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
            RequestPipelineFactory::createDefaultPipeline($this->formEncoder, $this->authenticator)
        );
    }

    /**
     * Builds ResponseTransformer.
     *
     * @return \RetailCrm\Api\Component\Transformer\ResponseTransformer
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    private function buildResponseTransformer(): ResponseTransformer
    {
        if (null === $this->formEncoder) {
            throw new BuilderException(
                "You must provide a FormEncoder instance in order to delegate " .
                "ResponseTransformer instantiation to the ClientBuilder."
            );
        }

        return new ResponseTransformer(
            ResponsePipelineFactory::createDefaultPipeline($this->formEncoder->getSerializer())
        );
    }
}
