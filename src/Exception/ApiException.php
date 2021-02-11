<?php

/**
 * PHP version 7.3
 *
 * @category ApiException
 * @package  RetailCrm\Api\Exception
 */

namespace RetailCrm\Api\Exception;

use Exception;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Model\Response\ResponseInterface;
use RuntimeException;
use Throwable;

/**
 * Class ApiException
 *
 * @category ApiException
 * @package  RetailCrm\Api\Exception
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
     * Returns ErrorResponse if underlying response is ErrorResponse. Throws exception otherwise.
     *
     * @return \RetailCrm\Api\Model\Response\ErrorResponse
     */
    public function getErrorResponse(): ErrorResponse
    {
        return $this->response; // @phpstan-ignore-line
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
