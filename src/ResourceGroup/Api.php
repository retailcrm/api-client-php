<?php

/**
 * PHP version 7.3
 *
 * @category Api
 * @package  RetailCrm\Api\Modules
 */

namespace RetailCrm\Api\ResourceGroup;

use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Interfaces\RequestTransformerInterface;
use RetailCrm\Api\Interfaces\ResponseTransformerInterface;
use RetailCrm\Api\Model\Response\Api\ApiVersionsResponse;
use RetailCrm\Api\Model\Response\Api\Credentials;

/**
 * Class Api
 *
 * @category Api
 * @package  RetailCrm\Api\Modules
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Api extends AbstractApiResourceGroup
{
    /**
     * Api constructor.
     *
     * @param string                                                 $baseUrl
     * @param \Psr\Http\Client\ClientInterface                       $httpClient
     * @param \RetailCrm\Api\Interfaces\RequestTransformerInterface  $requestTransformer
     * @param \RetailCrm\Api\Interfaces\ResponseTransformerInterface $responseTransformer
     * @param \Psr\Log\LoggerInterface|null                          $logger
     */
    public function __construct(
        string $baseUrl,
        ClientInterface $httpClient,
        RequestTransformerInterface $requestTransformer,
        ResponseTransformerInterface $responseTransformer,
        ?LoggerInterface $logger = null
    ) {
        parent::__construct(
            Utils::removeVersionFromUri($baseUrl),
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $logger
        );
    }

    /**
     * Makes GET "/api/api-versions" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $apiVersions = $client->api->apiVersions();
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Available API versions: ' . implode(', ', $apiVersions->versions);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\Api\ApiVersionsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function apiVersions(): ApiVersionsResponse
    {
        /** @var ApiVersionsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'api-versions',
            null,
            ApiVersionsResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/credentials" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $credentials = $client->api->credentials();
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Available methods ' . implode(', ', $credentials->credentials);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\Api\Credentials
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    public function credentials(): Credentials
    {
        /** @var Credentials $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'credentials',
            null,
            Credentials::class
        );
        return $response;
    }
}
