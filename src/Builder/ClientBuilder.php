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
use RetailCrm\Api\Exception\BuilderException;
use RetailCrm\Api\Component\FormData\FormEncoder;
use RetailCrm\Api\Component\Transformer\RequestTransformer;
use RetailCrm\Api\Factory\RequestPipelineFactory;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Factory\ResponsePipelineFactory;
use RetailCrm\Api\Interfaces\BuilderInterface;
use RetailCrm\Api\Interfaces\HandlerInterface;

/**
 * Class ClientBuilder
 *
 * @category ClientBuilder
 * @package  RetailCrm\Api\Builder
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

    /** @var ?\RetailCrm\Api\Component\Transformer\RequestTransformer */
    private $requestTransformer;

    /** @var ?ResponseTransformer */
    protected $responseTransformer;

    /** @var ?FormEncoder */
    private $formEncoder;

    /**
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
     * Don't set if you already added proper authenticator in the pipeline manually.
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
     * @param \RetailCrm\Api\Component\Transformer\RequestTransformer|null $requestTransformer
     *
     * @return ClientBuilder
     */
    public function setRequestTransformer(?RequestTransformer $requestTransformer): ClientBuilder
    {
        $this->requestTransformer = $requestTransformer;
        return $this;
    }

    /**
     * @param \RetailCrm\Api\Component\Transformer\ResponseTransformer|null $responseTransformer
     *
     * @return ClientBuilder
     */
    public function setResponseTransformer(?ResponseTransformer $responseTransformer): ClientBuilder
    {
        $this->responseTransformer = $responseTransformer;
        return $this;
    }

    /**
     * @param \RetailCrm\Api\Component\FormData\FormEncoder $formEncoder
     *
     * @return ClientBuilder
     */
    public function setFormEncoder(FormEncoder $formEncoder): ClientBuilder
    {
        $this->formEncoder = $formEncoder;
        return $this;
    }

    /**
     * @inheritDoc
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

        if (null !== $this->authenticator && null !== $this->requestTransformer) {
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
    public function buildResponseTransformer(): ResponseTransformer
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
