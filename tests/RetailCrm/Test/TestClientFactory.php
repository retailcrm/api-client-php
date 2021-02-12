<?php

/**
 * PHP version 7.3
 *
 * @category TestClientFactory
 * @package  RetailCrm\Test
 */

namespace RetailCrm\Test;

use Psr\Http\Client\ClientInterface;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Client;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;

/**
 * Class TestClientFactory
 *
 * @category TestClientFactory
 * @package  RetailCrm\Test
 */
class TestClientFactory
{
    /**
     * Create client using environment variables.
     *
     * @param \Psr\Http\Client\ClientInterface $client
     *
     * @return \RetailCrm\Api\Client
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    public static function createClient(ClientInterface $client): Client
    {
        $encoder = (new FormEncoderBuilder())->build();

        return (new ClientBuilder())
            ->setApiUrl(TestConfig::getApiUrl())
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler(TestConfig::getApiKey()))
            ->setFormEncoder($encoder)
            ->setHttpClient($client)
            ->build();
    }
}
