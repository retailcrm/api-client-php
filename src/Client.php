<?php

/**
 * PHP version 7.3
 *
 * @category Client
 * @package  RetailCrm\Api
 */

namespace RetailCrm\Api;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Interfaces\RequestTransformerInterface;
use RetailCrm\Api\Interfaces\ResponseTransformerInterface;
use RetailCrm\Api\ResourceGroup\Api;
use RetailCrm\Api\ResourceGroup\Costs;
use RetailCrm\Api\ResourceGroup\Customers;
use RetailCrm\Api\ResourceGroup\CustomersCorporate;
use RetailCrm\Api\ResourceGroup\CustomFields;
use RetailCrm\Api\ResourceGroup\Delivery;
use RetailCrm\Api\ResourceGroup\Files;
use RetailCrm\Api\ResourceGroup\Integration;
use RetailCrm\Api\ResourceGroup\Loyalty;
use RetailCrm\Api\ResourceGroup\Orders;
use RetailCrm\Api\ResourceGroup\Packs;
use RetailCrm\Api\ResourceGroup\Payments;
use RetailCrm\Api\ResourceGroup\References;
use RetailCrm\Api\ResourceGroup\Segments;
use RetailCrm\Api\ResourceGroup\Settings;

/**
 * Class Client
 *
 * Do not instantiate API client directly! Use `ClientFactory`, `SimpleClientFactory` or `ClientBuilder`.
 *
 * @category Client
 * @package  RetailCrm\Api
 * @see \RetailCrm\Api\Factory\ClientFactory
 * @see \RetailCrm\Api\Factory\SimpleClientFactory
 * @see \RetailCrm\Api\Builder\ClientBuilder
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
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

    /** @var \RetailCrm\Api\ResourceGroup\CustomersCorporate */
    public $customersCorporate;

    /** @var \RetailCrm\Api\ResourceGroup\Delivery */
    public $delivery;

    /** @var \RetailCrm\Api\ResourceGroup\Files */
    public $files;

    /** @var \RetailCrm\Api\ResourceGroup\Integration */
    public $integration;

    /** @var \RetailCrm\Api\ResourceGroup\Loyalty */
    public $loyalty;

    /** @var \RetailCrm\Api\ResourceGroup\Orders */
    public $orders;

    /** @var \RetailCrm\Api\ResourceGroup\Packs */
    public $packs;

    /** @var \RetailCrm\Api\ResourceGroup\Payments */
    public $payments;

    /** @var \RetailCrm\Api\ResourceGroup\References */
    public $references;

    /** @var \RetailCrm\Api\ResourceGroup\Segments */
    public $segments;

    /** @var \RetailCrm\Api\ResourceGroup\Settings */
    public $settings;

    /** @var StreamFactoryInterface */
    private $streamFactory;

    /**
     * Client constructor.
     *
     * @param string                                                 $apiUrl
     * @param \Psr\Http\Client\ClientInterface                       $httpClient
     * @param \RetailCrm\Api\Interfaces\RequestTransformerInterface  $requestTransformer
     * @param \RetailCrm\Api\Interfaces\ResponseTransformerInterface $responseTransformer
     * @param \Psr\Http\Message\StreamFactoryInterface               $streamFactory
     * @param \Psr\Log\LoggerInterface|null                          $logger
     */
    public function __construct(
        string $apiUrl,
        ClientInterface $httpClient,
        RequestTransformerInterface $requestTransformer,
        ResponseTransformerInterface $responseTransformer,
        StreamFactoryInterface $streamFactory,
        ?LoggerInterface $logger = null
    ) {
        $url = static::getBaseUrl($apiUrl);

        $this->streamFactory = $streamFactory;

        $this->api = new Api($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->costs = new Costs($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->customFields = new CustomFields($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->customers = new Customers($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->customersCorporate = new CustomersCorporate(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $logger
        );
        $this->delivery = new Delivery($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->files = new Files($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->integration = new Integration($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->loyalty = new Loyalty($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->orders = new Orders($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->packs = new Packs($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->payments = new Payments($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->references = new References($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->segments = new Segments($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
        $this->settings = new Settings($url, $httpClient, $requestTransformer, $responseTransformer, $logger);
    }

    /**
     * Returns PSR-17 stream factory.
     *
     * StreamFactory can be used to create a PSR-7 StreamInterface from various sources.
     *
     * @return \Psr\Http\Message\StreamFactoryInterface
     */
    public function getStreamFactory(): StreamFactoryInterface
    {
        return $this->streamFactory;
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
