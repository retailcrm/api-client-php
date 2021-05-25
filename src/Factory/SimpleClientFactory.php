<?php

/**
 * PHP version 7.3
 *
 * @category SimpleClientFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Psr\Cache\CacheItemPoolInterface;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Client;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;

/**
 * Class SimpleClientFactory
 *
 * @category SimpleClientFactory
 * @package  RetailCrm\Api\Factory
 * @see \RetailCrm\Api\Factory\ClientFactory
 */
class SimpleClientFactory
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
    public static function createClient(string $apiUrl, string $apiKey): Client
    {
        return (new ClientBuilder())
            ->setApiUrl($apiUrl)
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler($apiKey))
            ->setFormEncoder((new FormEncoderBuilder())->build())
            ->build();
    }

    /**
     * Instantiates Client with provided URL, key and cache implementation.
     *
     * @param string                            $apiUrl
     * @param string                            $apiKey
     * @param \Psr\Cache\CacheItemPoolInterface $cache
     *
     * @return \RetailCrm\Api\Client
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    public static function createWithCache(string $apiUrl, string $apiKey, CacheItemPoolInterface $cache): Client
    {
        return (new ClientBuilder())
            ->setApiUrl($apiUrl)
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler($apiKey))
            ->setFormEncoder(
                (new FormEncoderBuilder())
                    ->setCache($cache)
                    ->build()
            )
            ->build();
    }

    /**
     * Instantiates Client with provided URL, key and cache directory.
     *
     * @param string $apiUrl
     * @param string $apiKey
     * @param string $cacheDir
     *
     * @return \RetailCrm\Api\Client
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    public static function createWithCacheDir(string $apiUrl, string $apiKey, string $cacheDir): Client
    {
        return (new ClientBuilder())
            ->setApiUrl($apiUrl)
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler($apiKey))
            ->setFormEncoder(
                (new FormEncoderBuilder())
                    ->setCacheDir($cacheDir)
                    ->build()
            )
            ->build();
    }
}
