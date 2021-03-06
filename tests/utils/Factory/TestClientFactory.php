<?php

/**
 * PHP version 7.3
 *
 * @category TestClientFactory
 * @package  RetailCrm\TestUtils\Factory
 */

namespace RetailCrm\TestUtils\Factory;

use Doctrine\Common\Cache\ArrayCache;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Client;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;
use RetailCrm\TestUtils\TestConfig;

/**
 * Class TestClientFactory
 *
 * @category TestClientFactory
 * @package  RetailCrm\TestUtils\Factory
 */
class TestClientFactory
{
    /** @var \Doctrine\Common\Cache\Cache */
    private static $cache;

    /**
     * Create client using environment variables.
     *
     * @param \Psr\Http\Client\ClientInterface $client
     * @param \Psr\Log\LoggerInterface|null    $logger
     *
     * @return \RetailCrm\Api\Client
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    public static function createClient(ClientInterface $client, LoggerInterface $logger = null): Client
    {
        if (null === static::$cache) {
            static::$cache = new ArrayCache();
        }

        $encoder = (new FormEncoderBuilder())
            ->setCache(static::$cache)
            ->build();

        return (new ClientBuilder())
            ->setApiUrl(TestConfig::getApiUrl())
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler(TestConfig::getApiKey()))
            ->setDebugLogger($logger)
            ->setFormEncoder($encoder)
            ->setHttpClient($client)
            ->build();
    }
}
