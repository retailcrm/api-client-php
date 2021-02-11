<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiSection
 * @package  RetailCrm\Api\Modules
 */

namespace RetailCrm\Api\Section;

use Psr\Http\Client\ClientInterface;
use RetailCrm\Api\Component\Authenticator\AuthenticatorInterface;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Factory\RequestFactory;
use RetailCrm\Api\Factory\ResponseFactory;

/**
 * Class AbstractApiSection
 *
 * @category AbstractApiSection
 * @package  RetailCrm\Api\Modules
 */
abstract class AbstractApiSection
{
    /** @var string */
    protected $apiUrl;

    /** @var AuthenticatorInterface */
    protected $authenticator;

    /** @var ClientInterface */
    protected $httpClient;

    /** @var RequestFactory */
    protected $requestFactory;

    /** @var ResponseFactory */
    protected $responseFactory;

    /**
     * AbstractApiSection constructor.
     *
     * @param string                                                        $apiUrl
     * @param \RetailCrm\Api\Component\Authenticator\AuthenticatorInterface $authenticator
     * @param \Psr\Http\Client\ClientInterface                              $httpClient
     * @param \RetailCrm\Api\Factory\RequestFactory                         $requestFactory
     * @param \RetailCrm\Api\Factory\ResponseFactory                        $responseFactory
     *
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function __construct(
        string $apiUrl,
        AuthenticatorInterface $authenticator,
        ClientInterface $httpClient,
        RequestFactory $requestFactory,
        ResponseFactory $responseFactory
    ) {
        $this->apiUrl         = Utils::removeTrailingSlash($apiUrl);
        $this->authenticator  = $authenticator;
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->responseFactory = $responseFactory;
    }

    /**
     * @param string $apiUrl
     *
     * @return AbstractApiSection
     */
    public function setApiUrl(string $apiUrl): AbstractApiSection
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    /**
     * @param \RetailCrm\Api\Component\Authenticator\AuthenticatorInterface $authenticator
     *
     * @return AbstractApiSection
     */
    public function setAuthenticator(AuthenticatorInterface $authenticator): AbstractApiSection
    {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Returns route with base URI.
     *
     * @param string $route
     *
     * @return string
     */
    protected function route(string $route): string
    {
        return sprintf('%s/%s', $this->apiUrl, $route);
    }
}
