<?php

/**
 * PHP version 7.3
 *
 * @category WebAnalytics
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\WebAnalytics\ClientIdUploadRequest;
use RetailCrm\Api\Model\Request\WebAnalytics\SourcesUploadRequest;
use RetailCrm\Api\Model\Response\WebAnalytics\ClientIdUploadResponse;
use RetailCrm\Api\Model\Response\WebAnalytics\SourcesUploadResponse;

/**
 * Class WebAnalytics
 *
 * @category WebAnalytics
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class WebAnalytics extends AbstractApiResourceGroup
{
    /**
     * @param \RetailCrm\Api\Model\Request\WebAnalytics\SourcesUploadRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\WebAnalytics\SourcesUploadResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    public function sourcesUpload(SourcesUploadRequest $request): SourcesUploadResponse
    {
        /** @var SourcesUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'web-analytics/sources/upload',
            $request,
            SourcesUploadResponse::class
        );

        return $response;
    }

    /**
     * @param \RetailCrm\Api\Model\Request\WebAnalytics\ClientIdUploadRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\WebAnalytics\ClientIdUploadResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    public function clientIdsUpload(ClientIdUploadRequest $request): ClientIdUploadResponse
    {
        /** @var ClientIdUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'web-analytics/client-ids/upload',
            $request,
            ClientIdUploadResponse::class
        );

        return $response;
    }
}
