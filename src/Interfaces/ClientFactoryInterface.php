<?php

/**
 * PHP version 7.3
 *
 * @category ClientFactoryInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use RetailCrm\Api\Client;

/**
 * Interface ClientFactoryInterface
 *
 * @category ClientFactoryInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface ClientFactoryInterface
{
    /**
     * Instantiates Client with provided URL and key.
     *
     * @param string $apiUrl
     * @param string $apiKey
     *
     * @return \RetailCrm\Api\Client
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    public function createClient(string $apiUrl, string $apiKey): Client;
}
