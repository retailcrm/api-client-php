<?php

/**
 * PHP 7.3
 *
 * @category ClientExceptionInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use Throwable;

/**
 * Interface ClientExceptionInterface
 *
 * @category ClientExceptionInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface ClientExceptionInterface extends Throwable
{
    /**
     * Client exception must implement valid __toString() method.
     *
     * @return string
     */
    public function __toString();
}
