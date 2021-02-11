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
use RetailCrm\Api\Client;
use RetailCrm\Api\Component\Authenticator\AuthenticatorInterface;
use RetailCrm\Api\Component\Exception\BuilderException;
use RetailCrm\Api\Component\FormData\FormEncoder;
use RetailCrm\Api\Factory\RequestFactory;
use RetailCrm\Api\Factory\ResponseFactory;

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
     * @param \RetailCrm\Api\Component\Authenticator\AuthenticatorInterface $authenticator
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
            throw new BuilderException('apiUrl must not be empty', ['apiUrl']);
        }

        if (empty($this->authenticator) && empty($this->requestFactory)) {
            throw new BuilderException(
                'Authenticator or RequestFactory with authenticator must be present',
                ['authenticator', 'requestFactory']
            );
        }

        if (null === $this->authenticator) {
            $this->authenticator = $this->requestFactory->getAuthenticator();
        }

        return new Client(
            $this->apiUrl,
            $this->authenticator,
            $this->httpClient ?: Psr18ClientDiscovery::find(),
            $this->requestFactory ?: $this->buildRequestFactory($this->formEncoder),
            $this->responseFactory ?: new ResponseFactory($this->formEncoder->getSerializer()),
        );
    }

    /**
     * @param \RetailCrm\Api\Component\FormData\FormEncoder $formEncoder
     *
     * @return \RetailCrm\Api\Factory\RequestFactory
     * @throws \RetailCrm\Api\Component\Exception\BuilderException
     */
    private function buildRequestFactory(FormEncoder $formEncoder): RequestFactory
    {
        return (new RequestFactoryBuilder())
            ->setAuthenticator($this->authenticator)
            ->setFormEncoder($formEncoder)
            ->build();
    }
}
