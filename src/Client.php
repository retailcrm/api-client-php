<?php

/**
 * PHP version 7.3
 *
 * @category Client
 * @package  RetailCrm\Api
 */

namespace RetailCrm\Api;

use Psr\Http\Client\ClientInterface;
use RetailCrm\Api\Component\Authenticator\AuthenticatorInterface;
use RetailCrm\Api\Factory\RequestFactory;
use RetailCrm\Api\Factory\ResponseFactory;
use RetailCrm\Api\Section\Api;

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

    /**
     * Client constructor.
     *
     * @param string                                                        $apiUrl
     * @param \RetailCrm\Api\Component\Authenticator\AuthenticatorInterface $authenticator
     * @param \Psr\Http\Client\ClientInterface                              $httpClient
     * @param \RetailCrm\Api\Factory\RequestFactory                         $requestFactory
     * @param \RetailCrm\Api\Factory\ResponseFactory                        $responseFactory
     */
    public function __construct(
        string $apiUrl,
        AuthenticatorInterface $authenticator,
        ClientInterface $httpClient,
        RequestFactory $requestFactory,
        ResponseFactory $responseFactory
    ) {
        $this->api = new Api($apiUrl, $authenticator, $httpClient, $requestFactory, $responseFactory);
    }
}
