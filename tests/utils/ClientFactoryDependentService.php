<?php

/**
 * PHP version 7.3
 *
 * @category ClientFactoryDependentService
 * @package  RetailCrm\TestUtils
 */

namespace RetailCrm\TestUtils;

use Psr\Http\Client\ClientInterface;
use RetailCrm\Api\Interfaces\ClientFactoryInterface;
use Throwable;

/**
 * Class ClientFactoryDependentService
 *
 * @category ClientFactoryDependentService
 * @package  RetailCrm\TestUtils
 */
class ClientFactoryDependentService
{
    /** @var ClientFactoryInterface */
    private $clientFactory;

    /** @var \Psr\Http\Client\ClientInterface|null */
    private $httpClient;

    /**
     * ClientFactoryDependentService constructor.
     *
     * @param \RetailCrm\Api\Interfaces\ClientFactoryInterface $clientFactory
     */
    public function __construct(ClientFactoryInterface $clientFactory)
    {
        $this->clientFactory = $clientFactory;
    }

    /**
     * @param \Psr\Http\Client\ClientInterface|null $httpClient
     *
     * @return ClientFactoryDependentService
     */
    public function setHttpClient(?ClientInterface $httpClient): ClientFactoryDependentService
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * Returns true if API is available
     *
     * @param string $apiUrl
     * @param string $apiKey
     *
     * @return bool
     */
    public function isApiAccessible(string $apiUrl, string $apiKey): bool
    {
        try {
            $client = $this->clientFactory->createClient($apiUrl, $apiKey);

            if (null !== $this->httpClient) {
                ReflectionUtils::setProperty(
                    ReflectionUtils::getProperty($client, 'api'),
                    'httpClient',
                    $this->httpClient
                );
            }

            $client->api->apiVersions();

            return true;
        } catch (Throwable $throwable) {
            return false;
        }
    }
}
