<?php

/**
 * PHP version 7.3
 *
 * @category TestClientFactory
 * @package  RetailCrm\Test
 */

namespace RetailCrm\Test;

use Http\Client\Curl\Client as CurlClient;
use Psr\Http\Client\ClientInterface;
use RetailCrm\Api\Client;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Builder\RequestFactoryBuilder;
use RetailCrm\Api\Component\Authenticator\HeaderAuthenticator;
use RetailCrm\Api\Factory\ResponseFactory;

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
     * @throws \RetailCrm\Api\Component\Exception\BuilderException
     */
    public static function createClient(ClientInterface $client): Client
    {
        $encoder = (new FormEncoderBuilder())->build();
        $requestFactory = (new RequestFactoryBuilder())
            ->setAuthenticator(new HeaderAuthenticator(TestConfig::getApiKey()))
            ->setFormEncoder($encoder)
            ->build();

        $clientBuilder = (new ClientBuilder())
            ->setApiUrl(TestConfig::getApiUrl())
            ->setRequestFactory($requestFactory)
            ->setResponseFactory(new ResponseFactory($encoder->getSerializer()))
            ->setFormEncoder($encoder)
            ->setHttpClient($client);

        if (TestConfig::isUseRealNetwork()) {
            $clientBuilder->setHttpClient(new CurlClient());
        }

        return $clientBuilder->build();
    }
}
