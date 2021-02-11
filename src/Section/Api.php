<?php

/**
 * PHP version 7.3
 *
 * @category Api
 * @package  RetailCrm\Api\Modules
 */

namespace RetailCrm\Api\Section;

use Psr\Http\Client\ClientInterface;
use RetailCrm\Api\Component\Authenticator\AuthenticatorInterface;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Factory\RequestFactory;
use RetailCrm\Api\Factory\ResponseFactory;
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
     * @param string                                                        $apiUrl
     * @param \RetailCrm\Api\Component\Authenticator\AuthenticatorInterface $authenticator
     * @param \Psr\Http\Client\ClientInterface                              $httpClient
     * @param \RetailCrm\Api\Factory\RequestFactory                         $requestFactory
     * @param \RetailCrm\Api\Factory\ResponseFactory                        $responseFactory
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
