<?php

/**
 * PHP version 7.3
 *
 * @category ErrorResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */

namespace RetailCrm\Api\Handler\Response;

use RetailCrm\Api\Exception\ApiException;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Model\ResponseData;

/**
 * Class ErrorResponseHandler
 *
 * @category ErrorResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */
class ErrorResponseHandler extends AbstractResponseHandler
{
    /**
     * @inheritDoc
     */
    protected function handleResponse(ResponseData $responseData)
    {
        if ($responseData->response->getStatusCode() >= 400) {
            throw new ApiException(
                $this->unmarshalBody($responseData->response, ErrorResponse::class),
                $responseData->response->getStatusCode()
            );
        }

        return $this->next($responseData);
    }
}
