<?php

/**
 * PHP version 7.3
 *
 * @category ClientFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Client;

/**
 * Class ClientFactory
 *
 * @category ClientFactory
 * @package  RetailCrm\Api\Factory
 */
class ClientFactory
{
    /**
     * Instantiates Client with provided URL and key.
     *
     * @param string $apiUrl
     * @param string $apiKey
     *
     * @return \RetailCrm\Api\Client
     */
    public static function withApiKey(string $apiUrl, string $apiKey): Client
    {
        return (new ClientBuilder())->setApiUrl($apiUrl)->setApiKey($apiKey)->build();
    }
}
