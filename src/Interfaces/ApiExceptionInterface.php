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
    /**
     * Returns response status code
     *
     * @return int
     */
    public function getStatusCode(): int;

    /**
     * Returns ErrorResponse.
     *
     * @return \RetailCrm\Api\Model\Response\ErrorResponse
     */
    public function getErrorResponse(): ErrorResponse;

    /**
     * API exception must implement valid __toString() method.
     *
     * @return string
     */
    public function __toString();
}
