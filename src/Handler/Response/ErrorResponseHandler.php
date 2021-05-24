<?php

/**
 * PHP version 7.3
 *
 * @category ErrorResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */

namespace RetailCrm\Api\Handler\Response;

use RetailCrm\Api\Event\FailureRequestEvent;
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
            $event = new FailureRequestEvent(
                $responseData->baseUrl,
                $responseData->request,
                $responseData->response,
                $this->apiExceptionFactory->createException(
                    $this->unmarshalBody($responseData->response, ErrorResponse::class),
                    $responseData->response->getStatusCode()
                )
            );

            $this->dispatch($event);

            if (!$event->shouldSuppressThrow()) {
                throw $event->getException();
            }
        }

        return $this->next($responseData);
    }
}
