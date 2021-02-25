<?php

/**
 * PHP version 7.3
 *
 * @category ApiExceptionInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use Throwable;
use RetailCrm\Api\Model\Response\ErrorResponse;

/**
 * Interface ApiExceptionInterface
 *
 * @category ApiExceptionInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface ApiExceptionInterface extends Throwable
{
    // Should be used as default value.
    public const GENERIC_ERROR = 'generic_error';

    // Indicates absence of token.
    public const MISSING_CREDENTIALS = 'missing_credentials';

    // Should be used when validation wasn't successful.
    public const VALIDATION_ERROR = 'validation_error';

    // Should be used when one or more required parameters is not present.
    public const MISSING_PARAMETER = 'parameter_missing';

    // Should be used when target account does not exist.
    public const ACCOUNT_DOES_NOT_EXIST = 'account_does_not_exist';

    /**
     * Returns response status code
     *
     * @return int
     */
    public function getStatusCode(): int;

    /**
     * Returns error type (one of constants provided above).
     *
     * @return string
     */
    public function getErrorType(): string;

    /**
     * Returns ErrorResponse.
     *
     * @return \RetailCrm\Api\Model\Response\ErrorResponse
     */
    public function getErrorResponse(): ErrorResponse;
}
