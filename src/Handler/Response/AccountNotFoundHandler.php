<?php

/**
 * PHP version 7.3
 *
 * @category AccountNotFoundHandler
 * @package  RetailCrm\Api\Handler\Response
 */

namespace RetailCrm\Api\Handler\Response;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Message\ResponseInterface;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Event\FailureRequestEvent;
use RetailCrm\Api\Exception\Api\AccountDoesNotExistException;
use RetailCrm\Api\Exception\ApiException;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Model\ResponseData;

/**
 * Class AccountNotFoundHandler
 *
 * @category AccountNotFoundHandler
 * @package  RetailCrm\Api\Handler\Response
 */
class AccountNotFoundHandler extends AbstractResponseHandler
{
    /**
     * @inheritDoc
     */
    protected function handleResponse(ResponseData $responseData)
    {
        if (
            RequestMethod::GET !== $responseData->method &&
            405 === $responseData->response->getStatusCode() &&
            static::isContentType($responseData->response, 'text/html')
        ) {
            $errorResponse = new ErrorResponse();
            $errorResponse->errorMsg = 'Account does not exist.';

            $exception = new AccountDoesNotExistException($errorResponse, $responseData->response->getStatusCode());

            $this->dispatch(new FailureRequestEvent($responseData->response, $exception));

            throw $exception;
        }

        return $this->next($responseData);
    }

    /**
     * Returns true if response contains provided content type.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string                              $mime
     *
     * @return bool
     */
    private static function isContentType(ResponseInterface $response, string $mime): bool
    {
        $contentTypeHeader = $response->getHeader('Content-Type');

        foreach ($contentTypeHeader as $contentType) {
            if (false !== stripos($contentType, $mime)) {
                return true;
            }
        }

        return false;
    }
}
