<?php

/**
 * PHP version 7.3
 *
 * @category TestClientFactory
 * @package  RetailCrm\TestUtils\Factory
 */

namespace RetailCrm\TestUtils\Factory;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Client;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;
use RetailCrm\Api\Interfaces\HandlerInterface;
use RetailCrm\TestUtils\TestConfig;
use Symfony\Component\Cache\Adapter\ArrayAdapter;

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
     * @param \Psr\Http\Client\ClientInterface                   $client
     * @param \Psr\Log\LoggerInterface|null                      $logger
     * @param \Psr\EventDispatcher\EventDispatcherInterface|null $eventDispatcher
     * @param \RetailCrm\Api\Interfaces\HandlerInterface|null    $authenticator
     *
     * @return \RetailCrm\Api\Client
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    public static function createClient(
        ClientInterface $client,
        ?LoggerInterface $logger = null,
        ?EventDispatcherInterface $eventDispatcher = null,
        ?HandlerInterface $authenticator = null
    ): Client {
        if (null === static::$cache) {
            static::$cache = new ArrayAdapter();
        }

        $encoder = (new FormEncoderBuilder())
            ->setCache(static::$cache)
            ->build();

        return (new ClientBuilder())
            ->setApiUrl(TestConfig::getApiUrl())
            ->setAuthenticatorHandler($authenticator ?? new HeaderAuthenticatorHandler(TestConfig::getApiKey()))
            ->setDebugLogger($logger)
            ->setEventDispatcher($eventDispatcher)
            ->setFormEncoder($encoder)
            ->setHttpClient($client)
            ->build();
    }
}
