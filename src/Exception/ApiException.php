<?php

/**
 * PHP version 7.3
 *
 * @category ApiException
 * @package  RetailCrm\Api\Exception
 */

namespace RetailCrm\Api\Exception;

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
class ApiException extends Exception implements ApiExceptionInterface
{
    /** @var string[] */
    private $errorMessagesMapping = [
        '"apiKey" is missing.' => self::MISSING_CREDENTIALS,
        'Account does not exist.' => self::ACCOUNT_DOES_NOT_EXIST,
        'Errors in the entity format' => self::VALIDATION_ERROR,
        'Validation error' => self::VALIDATION_ERROR
    ];

    /** @var \RetailCrm\Api\Model\Response\ErrorResponse */
    private $response;

    /** @var string */
    private $errorType;

    /**
     * ApiException constructor.
     *
     * @param \RetailCrm\Api\Interfaces\ResponseInterface $errorResponse
     * @param int                                         $statusCode
     * @param \Throwable|null                             $previous
     */
    public function __construct(ResponseInterface $errorResponse, int $statusCode = 0, Throwable $previous = null)
    {
        $this->response  = $errorResponse instanceof ErrorResponse ? $errorResponse : new ErrorResponse();
        $this->errorType = $this->getErrorTypeByMessage($this->response->errorMsg ?? '');

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
     * Returns error type.
     *
     * @return string
     */
    public function getErrorType(): string
    {
        return $this->errorType;
    }

    /**
     * Returns error type by error message.
     *
     * @param string $message
     *
     * @return string
     */
    private function getErrorTypeByMessage(string $message): string
    {
        if (array_key_exists($message, $this->errorMessagesMapping)) {
            return $this->errorMessagesMapping[$message];
        }

        if (preg_match('/^Parameter \'[\w\]\[\_\-]+\' is missing$/', $message)) {
            return self::MISSING_PARAMETER;
        }

        return self::GENERIC_ERROR;
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
