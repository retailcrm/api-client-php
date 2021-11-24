<?php

/**
 * PHP 7.3
 *
 * @category ApiExceptionFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use RetailCrm\Api\Exception\Api\AccessDeniedException;
use RetailCrm\Api\Exception\Api\AccountDoesNotExistException;
use RetailCrm\Api\Exception\Api\ApiErrorException;
use RetailCrm\Api\Exception\Api\InvalidCredentialsException;
use RetailCrm\Api\Exception\Api\MissingCredentialsException;
use RetailCrm\Api\Exception\Api\MissingParameterException;
use RetailCrm\Api\Exception\Api\ValidationException;
use RetailCrm\Api\Exception\ApiException;
use RetailCrm\Api\Interfaces\ResponseInterface;
use RetailCrm\Api\Model\Response\ErrorResponse;
use Throwable;

/**
 * Class ApiExceptionFactory
 *
 * @category ApiExceptionFactory
 * @package  RetailCrm\Api\Factory
 */
class ApiExceptionFactory
{
    /** @var string[] */
    private static $errorTypesMapping = [
        '"apiKey" is missing.' => MissingCredentialsException::class,
        'Wrong "apiKey" value.' => InvalidCredentialsException::class,
        'Access denied.' => AccessDeniedException::class,
        'Account does not exist.' => AccountDoesNotExistException::class,
        'Errors in the entity format' => ValidationException::class,
        'Validation error' => ValidationException::class,
    ];

    /**
     * Create exception from API response.
     *
     * @param \RetailCrm\Api\Interfaces\ResponseInterface $errorResponse
     * @param int                                         $statusCode
     * @param \Throwable|null                             $previous
     *
     * @return \RetailCrm\Api\Exception\ApiException
     */
    public function createException(
        ResponseInterface $errorResponse,
        int $statusCode = 0,
        Throwable $previous = null
    ): ApiException {
        $response = $errorResponse instanceof ErrorResponse ? $errorResponse : new ErrorResponse();
        $response->errorMsg = $response->errorMsg ?? '';
        $response->errors = $response->errors ?? [];
        $errorFqn = self::getErrorClassByMessage($response->errorMsg ?? '');

        if (class_exists($errorFqn) && is_subclass_of($errorFqn, ApiException::class)) {
            return new $errorFqn($response, $statusCode, $previous);
        }

        return new ApiErrorException($response, $statusCode, $previous);
    }

    /**
     * Returns error class by error message.
     *
     * @param string $message
     *
     * @return string
     */
    private static function getErrorClassByMessage(string $message): string
    {
        if (array_key_exists($message, self::$errorTypesMapping)) {
            return self::$errorTypesMapping[$message];
        }

        if (preg_match('/^Parameter \'[\w\]\[\_\-]+\' is missing$/', $message)) {
            return MissingParameterException::class;
        }

        return ApiErrorException::class;
    }
}
