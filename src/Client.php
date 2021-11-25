<?php

/**
 * PHP version 7.3
 *
 * @category Client
 * @package  RetailCrm\Api
 */

namespace RetailCrm\Api;

use Psr\EventDispatcher\EventDispatcherInterface;
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
use RetailCrm\Api\ResourceGroup\CustomMethods;
use RetailCrm\Api\ResourceGroup\Delivery;
use RetailCrm\Api\ResourceGroup\Files;
use RetailCrm\Api\ResourceGroup\Integration;
use RetailCrm\Api\ResourceGroup\Inventories;
use RetailCrm\Api\ResourceGroup\Loyalty;
use RetailCrm\Api\ResourceGroup\Orders;
use RetailCrm\Api\ResourceGroup\Packs;
use RetailCrm\Api\ResourceGroup\Payments;
use RetailCrm\Api\ResourceGroup\References;
use RetailCrm\Api\ResourceGroup\Segments;
use RetailCrm\Api\ResourceGroup\Settings;
use RetailCrm\Api\ResourceGroup\Statistics;
use RetailCrm\Api\ResourceGroup\Store;
use RetailCrm\Api\ResourceGroup\Tasks;
use RetailCrm\Api\ResourceGroup\Telephony;
use RetailCrm\Api\ResourceGroup\Users;
use RetailCrm\Api\ResourceGroup\Verification;

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

    /** @var \RetailCrm\Api\ResourceGroup\Store */
    public $store;

    /** @var \RetailCrm\Api\ResourceGroup\Tasks */
    public $tasks;

    /** @var \RetailCrm\Api\ResourceGroup\Telephony */
    public $telephony;

    /** @var \RetailCrm\Api\ResourceGroup\Users */
    public $users;

    /** @var \RetailCrm\Api\ResourceGroup\Verification */
    public $verification;

    /** @var \RetailCrm\Api\ResourceGroup\Statistics */
    public $statistics;

    /** @var \RetailCrm\Api\ResourceGroup\CustomMethods */
    public $customMethods;

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
     * @param \Psr\EventDispatcher\EventDispatcherInterface|null     $eventDispatcher
     * @param \Psr\Log\LoggerInterface|null                          $logger
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @todo Maybe initialize children groups using different method?
     */
    public function __construct(
        string $apiUrl,
        ClientInterface $httpClient,
        RequestTransformerInterface $requestTransformer,
        ResponseTransformerInterface $responseTransformer,
        StreamFactoryInterface $streamFactory,
        ?EventDispatcherInterface $eventDispatcher = null,
        ?LoggerInterface $logger = null
    ) {
        $url = static::getBaseUrl($apiUrl);

        $this->streamFactory = $streamFactory;

        $this->api = new Api(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->costs = new Costs(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->customFields = new CustomFields(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->customers = new Customers(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->customersCorporate = new CustomersCorporate(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->delivery = new Delivery(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->files = new Files(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->integration = new Integration(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->loyalty = new Loyalty(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->orders = new Orders(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->packs = new Packs(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->payments = new Payments(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->references = new References(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->segments = new Segments(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->settings = new Settings(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->store = new Store(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->tasks = new Tasks(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->telephony = new Telephony(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->users = new Users(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->verification = new Verification(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->statistics = new Statistics(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
        $this->customMethods = new CustomMethods(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );
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
