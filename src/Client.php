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
use RetailCrm\Api\Interfaces\RequestTransformerInterface;
use RetailCrm\Api\Interfaces\ResponseTransformerInterface;
use RetailCrm\Api\ResourceGroup\Api;
use RetailCrm\Api\ResourceGroup\Costs;
use RetailCrm\Api\ResourceGroup\Customers;
use RetailCrm\Api\ResourceGroup\CustomFields;

/**
 * Class Client
 *
 * Do not instantiate API client directly! Use `ClientFactory` or `ClientBuilder`.
 *
 * @category Client
 * @package  RetailCrm\Api
 * @see \RetailCrm\Api\Factory\ClientFactory
 * @see \RetailCrm\Api\Builder\ClientBuilder
 */
class Client
{
    /** @var \RetailCrm\Api\ResourceGroup\Api */
    public $api;

    /** @var \RetailCrm\Api\ResourceGroup\Costs */
    public $costs;

    /** @var \RetailCrm\Api\ResourceGroup\CustomFields */
    public $customFields;

    /** @var \RetailCrm\Api\ResourceGroup\Customers */
    public $customers;

    /**
     * Client constructor.
     *
     * @param string                                                 $apiUrl
     * @param \Psr\Http\Client\ClientInterface                       $httpClient
     * @param \RetailCrm\Api\Interfaces\RequestTransformerInterface  $requestTransformer
     * @param \RetailCrm\Api\Interfaces\ResponseTransformerInterface $responseTransformer
     * @param \Psr\Log\LoggerInterface|null                          $logger
     */
    public function __construct(
        string $apiUrl,
        ClientInterface $httpClient,
        RequestTransformerInterface $requestTransformer,
        ResponseTransformerInterface $responseTransformer,
        ?LoggerInterface $logger = null
    ) {
        $url = static::getBaseUrl($apiUrl);

        $this->api = new Api($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->costs = new Costs($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->customFields = new CustomFields($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->customers = new Customers($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
    }

    /**
     * Parses provided URL, builds API url with version out of it.
     *
     * @param string $url
     *
     * @return string
     */
    private static function getBaseUrl(string $url): string
    {
        return Utils::removeTrailingSlash($url) . '/api/v5';
    }
}
