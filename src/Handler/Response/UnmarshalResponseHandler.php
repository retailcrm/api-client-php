<?php

/**
 * PHP version 7.3
 *
 * @category UnmarshalResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */

namespace RetailCrm\Api\Handler\Response;

use RetailCrm\Api\Event\SuccessRequestEvent;
use RetailCrm\Api\Model\ResponseData;

/**
 * Class UnmarshalResponseHandler
 *
 * @category UnmarshalResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 * @SuppressWarnings(PHPMD.ElseExpression)
 */
class UnmarshalResponseHandler extends AbstractResponseHandler
{
    /**
     * @inheritDoc
     */
    protected function handleResponse(ResponseData $responseData)
    {
        if ($responseData->custom) {
            $responseData->responseArray = $this->unmarshalBodyArray($responseData->response);
        } else {
            $responseData->responseModel = $this->unmarshalBody($responseData->response, $responseData->type);
        }

        $this->dispatch(new SuccessRequestEvent(
            $responseData->baseUrl,
            $responseData->request,
            $responseData->response,
            $responseData->responseModel,
            $responseData->responseArray ?? []
        ));
    }
}
