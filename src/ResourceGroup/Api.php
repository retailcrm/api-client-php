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
use RetailCrm\Api\Component\Transformer\RequestTransformer;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
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
     * @param string                                                   $baseUrl
     * @param \Psr\Http\Client\ClientInterface                         $httpClient
     * @param \RetailCrm\Api\Component\Transformer\RequestTransformer  $requestTransformer
     * @param \RetailCrm\Api\Component\Transformer\ResponseTransformer $responseTransformer
     * @param \Psr\Log\LoggerInterface|null                            $logger
     */
    public function __construct(
        string $baseUrl,
        ClientInterface $httpClient,
        RequestTransformer $requestTransformer,
        ResponseTransformer $responseTransformer,
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
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Exception\ApiException;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $apiVersions = $client->api->apiVersions();
     * } catch (ApiException $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     * }
     *
     * echo 'Available API versions: ' . implode(', ', $apiVersions->versions);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\Api\ApiVersionsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\ApiException
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
     * use RetailCrm\Api\Factory\ClientFactory;
     * use RetailCrm\Api\Exception\ApiException;
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $credentials = $client->api->credentials();
     * } catch (ApiException $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     * }
     *
     * echo 'Available methods ' . implode(', ', $credentials->credentials);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\Api\Credentials
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\ApiException
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
