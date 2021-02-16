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
use RetailCrm\Api\Component\Transformer\RequestTransformer;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\ResourceGroup\Api;
use RetailCrm\Api\ResourceGroup\Costs;
use RetailCrm\Api\ResourceGroup\Customers;
use RetailCrm\Api\ResourceGroup\CustomFields;

/**
 * Class Client
 *
 * @category Client
 * @package  RetailCrm\Api
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
     * @param string                                                   $apiUrl
     * @param \Psr\Http\Client\ClientInterface                         $httpClient
     * @param \RetailCrm\Api\Component\Transformer\RequestTransformer  $requestTransformer
     * @param \RetailCrm\Api\Component\Transformer\ResponseTransformer $responseTransformer
     * @param \Psr\Log\LoggerInterface|null                            $logger
     */
    public function __construct(
        string $apiUrl,
        ClientInterface $httpClient,
        RequestTransformer $requestTransformer,
        ResponseTransformer $responseTransformer,
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
    public static function getBaseUrl(string $url): string
    {
        return Utils::removeTrailingSlash($url) . '/api/v5';
    }
}
