<?php

/**
 * PHP version 7.3
 *
 * @category ClientFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Doctrine\Common\Cache\Cache;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Client;
use RetailCrm\Api\Component\Authenticator\HeaderAuthenticator;

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
     * @throws \RetailCrm\Api\Component\Exception\BuilderException
     */
    public static function create(string $apiUrl, string $apiKey): Client
    {
        return (new ClientBuilder())
            ->setApiUrl($apiUrl)
            ->setAuthenticator(new HeaderAuthenticator($apiKey))
            ->setFormEncoder((new FormEncoderBuilder())->build())
            ->build();
    }

    /**
     * Instantiates Client with provided URL, key and cache implementation.
     *
     * @param string                       $apiUrl
     * @param string                       $apiKey
     * @param \Doctrine\Common\Cache\Cache $cache
     *
     * @return \RetailCrm\Api\Client
     * @throws \RetailCrm\Api\Component\Exception\BuilderException
     */
    public static function createWithCache(string $apiUrl, string $apiKey, Cache $cache): Client
    {
        return (new ClientBuilder())
            ->setApiUrl($apiUrl)
            ->setAuthenticator(new HeaderAuthenticator($apiKey))
            ->setFormEncoder(
                (new FormEncoderBuilder())
                    ->setCache($cache)
                    ->build()
            )->build();
    }

    /**
     * Instantiates Client with provided URL, key and cache directory.
     *
     * @param string $apiUrl
     * @param string $apiKey
     * @param string $cacheDir
     *
     * @return \RetailCrm\Api\Client
     * @throws \RetailCrm\Api\Component\Exception\BuilderException
     */
    public static function createWithCacheDir(string $apiUrl, string $apiKey, string $cacheDir): Client
    {
        return (new ClientBuilder())
            ->setApiUrl($apiUrl)
            ->setAuthenticator(new HeaderAuthenticator($apiKey))
            ->setFormEncoder(
                (new FormEncoderBuilder())
                    ->setCacheDir($cacheDir)
                    ->build()
            )->build();
    }
}
