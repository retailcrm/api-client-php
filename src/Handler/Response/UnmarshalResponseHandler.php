<?php

/**
 * PHP version 7.3
 *
 * @category UnmarshalResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */

namespace RetailCrm\Api\Handler\Response;

use RetailCrm\Api\Model\ResponseData;

/**
 * Class UnmarshalResponseHandler
 *
 * @category UnmarshalResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */
class UnmarshalResponseHandler extends AbstractResponseHandler
{
    /**
     * @inheritDoc
     */
    protected function handleResponse(ResponseData $responseData)
    {
        $responseData->responseModel = $this->unmarshalBody($responseData->response, $responseData->type);
    }
}
