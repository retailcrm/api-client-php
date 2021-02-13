<?php

/**
 * PHP version 7.3
 *
 * @category ApiException
 * @package  RetailCrm\Api\Exception
 */

namespace RetailCrm\Api\Exception;

use Exception;
use RetailCrm\Api\Interfaces\ResponseInterface;
use RetailCrm\Api\Model\Response\ErrorResponse;
use Throwable;

/**
 * Class ApiException
 *
 * @category ApiException
 * @package  RetailCrm\Api\Exception
 */
class ApiException extends Exception
{
    /** @var \RetailCrm\Api\Model\Response\ErrorResponse */
    private $response;

    /**
     * ApiException constructor.
     *
     * @param \RetailCrm\Api\Interfaces\ResponseInterface $errorResponse
     * @param int                                         $statusCode
     * @param \Throwable|null                             $previous
     */
    public function __construct(ResponseInterface $errorResponse, int $statusCode = 0, Throwable $previous = null)
    {
        $this->response = $errorResponse instanceof ErrorResponse ? $errorResponse : new ErrorResponse();

        parent::__construct(static::getErrorMessage($this->response), $statusCode, $previous);
    }

    /**
     * Returns response status code
     *
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->code;
    }

    /**
     * Returns ErrorResponse.
     *
     * @return \RetailCrm\Api\Model\Response\ErrorResponse
     */
    public function getErrorResponse(): ErrorResponse
    {
        return $this->response;
    }

    /**
     * Returns the error message.
     *
     * @param \RetailCrm\Api\Model\Response\ErrorResponse $errorResponse
     *
     * @return string
     */
    private static function getErrorMessage(ErrorResponse $errorResponse): string
    {
        if (!empty($errorResponse->errorMsg)) {
            return $errorResponse->errorMsg;
        }

        if (!empty($errorResponse->errors)) {
            return (string) reset($errorResponse->errors);
        }

        return 'RetailCRM API Error';
    }
}
