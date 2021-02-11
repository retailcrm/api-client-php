<?php

/**
 * PHP version 7.3
 *
 * @category ApiException
 * @package  RetailCrm\Api\Component\Exception
 */

namespace RetailCrm\Api\Component\Exception;

use Exception;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Model\Response\ResponseInterface;
use Throwable;

/**
 * Class ApiException
 *
 * @category ApiException
 * @package  RetailCrm\Api\Component\Exception
 */
class ApiException extends Exception
{
    /** @var \RetailCrm\Api\Model\Response\ResponseInterface */
    private $response;

    /**
     * ApiException constructor.
     *
     * @param \RetailCrm\Api\Model\Response\ResponseInterface $errorResponse
     * @param int                                             $code
     * @param \Throwable|null                                 $previous
     */
    public function __construct(ResponseInterface $errorResponse, $code = 0, Throwable $previous = null)
    {
        parent::__construct(static::getErrorMessage($errorResponse), $code, $previous);

        $this->response = $errorResponse;
    }

    /**
     * @return \RetailCrm\Api\Model\Response\ResponseInterface
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    /**
     * Returns ErrorResponse if underlying response is ErrorResponse. Returns null otherwise.
     *
     * @return \RetailCrm\Api\Model\Response\ErrorResponse|null
     */
    public function getErrorResponse(): ?ErrorResponse
    {
        if ($this->response instanceof ErrorResponse) {
            return $this->response;
        }

        return null;
    }

    /**
     * Returns the error message.
     *
     * @param \RetailCrm\Api\Model\Response\ResponseInterface $errorResponse
     *
     * @return string
     */
    private static function getErrorMessage(ResponseInterface $errorResponse): string
    {
        if ($errorResponse instanceof ErrorResponse) {
            if (!empty($errorResponse->errorMsg)) {
                return $errorResponse->errorMsg;
            }

            if (!empty($errorResponse->errors)) {
                return (string) reset($errorResponse->errors);
            }
        }

        return 'RetailCRM API Error';
    }
}
