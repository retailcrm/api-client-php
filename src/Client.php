<?php

/**
 * PHP version 7.3
 *
 * @category Client
 * @package  RetailCrm\Api
 */

namespace RetailCrm\Api;

use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Factory\RequestFactory;
use RetailCrm\Api\Factory\ResponseFactory;
use RetailCrm\Api\Interfaces\AuthenticatorInterface;
use RetailCrm\Api\Section\Api;
use RetailCrm\Api\Section\Costs;

/**
 * Class Client
 *
 * @category Client
 * @package  RetailCrm\Api
 */
class Client
{
    /** @var \RetailCrm\Api\Section\Api */
    public $api;

    /** @var \RetailCrm\Api\Section\Costs */
    public $costs;

    /**
     * Client constructor.
     *
     * @param string                                           $apiUrl
     * @param \RetailCrm\Api\Interfaces\AuthenticatorInterface $authenticator
     * @param \Psr\Http\Client\ClientInterface                 $httpClient
     * @param \RetailCrm\Api\Factory\RequestFactory            $requestFactory
     * @param \RetailCrm\Api\Factory\ResponseFactory           $responseFactory
     * @param \Psr\Log\LoggerInterface|null                    $logger
     */
    public function __construct(
        string $apiUrl,
        AuthenticatorInterface $authenticator,
        ClientInterface $httpClient,
        RequestFactory $requestFactory,
        ResponseFactory $responseFactory,
        ?LoggerInterface $logger = null
    ) {
        $baseUrl = static::getBaseUrl($apiUrl);

        $this->api = new Api($baseUrl, $authenticator, $httpClient, $requestFactory, $responseFactory, $logger);
        $this->costs = new Costs($baseUrl, $authenticator, $httpClient, $requestFactory, $responseFactory, $logger);
    }

    /**
     * Parses provided URL, builds API url with version out of it.
     *
     * @param string $url
     *
     * @return string
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public static function getBaseUrl(string $url): string
    {
        return Utils::removeTrailingSlash($url) . '/api/v5';
    }
}
