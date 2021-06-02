<?php

/**
 * PHP version 7.3
 *
 * @category ApiException
 * @package  RetailCrm\Api\Exception
 */

namespace RetailCrm\Api\Exception;

use Countable;
use Exception;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Interfaces\ResponseInterface;
use RetailCrm\Api\Model\Response\ErrorResponse;
use Throwable;

/**
 * Class ApiException
 *
 * @category ApiException
 * @package  RetailCrm\Api\Exception
 */
abstract class ApiException extends Exception implements ApiExceptionInterface
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
     * @return string
     */
    public function __toString(): string
    {
        $base = sprintf(
            "API Exception with message '%s' in %s:%d\nResponse status code: %d\n",
            $this->getMessage(),
            $this->getFile(),
            $this->getLine(),
            $this->getStatusCode()
        );
        $errorsList = $this->getErrorResponse()->errors;

        if (null !== $errorsList && count($errorsList) > 0) {
            $errors = [];

            foreach ($this->getErrorResponse()->errors as $key => $error) {
                $errors[] = sprintf(' - %s: %s', $key, $error);
            }

            $base .= sprintf("Errors:\n%s\n", implode(PHP_EOL, $errors));
        }

        return trim($base . sprintf("Stacktrace: %s", $this->getTraceAsString()));
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
