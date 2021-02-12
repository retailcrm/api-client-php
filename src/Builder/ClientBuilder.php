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
use RetailCrm\Api\Interfaces\AuthenticatorInterface;
use RetailCrm\Api\Exception\BuilderException;
use RetailCrm\Api\Component\FormData\FormEncoder;
use RetailCrm\Api\Factory\RequestFactory;
use RetailCrm\Api\Factory\ResponseFactory;
use RetailCrm\Api\Interfaces\BuilderInterface;

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

    /** @var AuthenticatorInterface */
    private $authenticator;

    /** @var ?ClientInterface */
    private $httpClient;

    /** @var ?\Psr\Log\LoggerInterface */
    private $debugLogger;

    /** @var ?\RetailCrm\Api\Factory\RequestFactory */
    private $requestFactory;

    /** @var ?ResponseFactory */
    protected $responseFactory;

    /** @var FormEncoder */
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
     * @param \RetailCrm\Api\Interfaces\AuthenticatorInterface $authenticator
     *
     * @return ClientBuilder
     */
    public function setAuthenticator(AuthenticatorInterface $authenticator): ClientBuilder
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
     * @param \RetailCrm\Api\Factory\RequestFactory|null $requestFactory
     *
     * @return ClientBuilder
     */
    public function setRequestFactory(?RequestFactory $requestFactory): ClientBuilder
    {
        $this->requestFactory = $requestFactory;
        return $this;
    }

    /**
     * @param \RetailCrm\Api\Factory\ResponseFactory|null $responseFactory
     *
     * @return ClientBuilder
     */
    public function setResponseFactory(?ResponseFactory $responseFactory): ClientBuilder
    {
        $this->responseFactory = $responseFactory;
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
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function build(): Client
    {
        if (empty($this->apiUrl)) {
            throw new BuilderException('baseUrl must not be empty', ['baseUrl']);
        }

        if (empty($this->authenticator) && empty($this->requestFactory)) {
            throw new BuilderException(
                'Authenticator or RequestFactory with authenticator must be present',
                ['authenticator', 'requestFactory']
            );
        }

        if (null === $this->authenticator && null !== $this->requestFactory) {
            $this->authenticator = $this->requestFactory->getAuthenticator();
        }

        return new Client(
            $this->apiUrl,
            $this->authenticator,
            $this->httpClient ?: Psr18ClientDiscovery::find(),
            $this->requestFactory ?: $this->buildRequestFactory($this->formEncoder),
            $this->responseFactory ?: new ResponseFactory($this->formEncoder->getSerializer()),
            $this->debugLogger
        );
    }

    /**
     * @param \RetailCrm\Api\Component\FormData\FormEncoder $formEncoder
     *
     * @return \RetailCrm\Api\Factory\RequestFactory
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    private function buildRequestFactory(FormEncoder $formEncoder): RequestFactory
    {
        return (new RequestFactoryBuilder())
            ->setAuthenticator($this->authenticator)
            ->setFormEncoder($formEncoder)
            ->build();
    }
}
