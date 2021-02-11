<?php

/**
 * PHP version 7.3
 *
 * @category Api
 * @package  RetailCrm\Api\Modules
 */

namespace RetailCrm\Api\Section;

use Psr\Http\Client\ClientInterface;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Factory\RequestFactory;
use RetailCrm\Api\Factory\ResponseFactory;
use RetailCrm\Api\Interfaces\AuthenticatorInterface;
use RetailCrm\Api\Model\Response\Api as Response;
use RetailCrm\Api\Model\Response\Api\ApiVersionsResponse;

/**
 * Class Api
 *
 * @category Api
 * @package  RetailCrm\Api\Modules
 */
class Api extends AbstractApiSection
{
    /**
     * Api constructor.
     *
     * @param string                                           $apiUrl
     * @param \RetailCrm\Api\Interfaces\AuthenticatorInterface $authenticator
     * @param \Psr\Http\Client\ClientInterface                 $httpClient
     * @param \RetailCrm\Api\Factory\RequestFactory            $requestFactory
     * @param \RetailCrm\Api\Factory\ResponseFactory           $responseFactory
     *
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function __construct(
        string $apiUrl,
        AuthenticatorInterface $authenticator,
        ClientInterface $httpClient,
        RequestFactory $requestFactory,
        ResponseFactory $responseFactory
    ) {
        parent::__construct(
            Utils::removeVersionFromUri($apiUrl),
            $authenticator,
            $httpClient,
            $requestFactory,
            $responseFactory
        );
    }

    /**
     * Makes "/api/api-versions" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\ClientFactory();
     *
     * $client = ClientFactory::create('https://test.retailcrm.pro', 'apiKey');
     * $apiVersions = $client->api->apiVersions();
     *
     * echo 'Available API versions: ' . implode(', ', $apiVersions->versions);
     * ```
     *
     * @return \RetailCrm\Api\Model\Response\Api\ApiVersionsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\FactoryException
     */
    public function apiVersions(): ApiVersionsResponse
    {
        /** @var ApiVersionsResponse $response */
        $response = $this->responseFactory->createResponse($this->httpClient->sendRequest(
            $this->requestFactory->createPsrRequest(
                RequestMethod::GET,
                $this->route('api-versions')
            )
        ), Response\ApiVersionsResponse::class);

        return $response;
    }
}
