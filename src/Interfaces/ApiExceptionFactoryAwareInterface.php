<?php

/**
 * PHP version 7.3
 *
 * @category ApiExceptionFactoryAwareInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use RetailCrm\Api\Factory\ApiExceptionFactory;

/**
 * Interface ApiExceptionFactoryAwareInterface
 *
 * @category ApiExceptionFactoryAwareInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface ApiExceptionFactoryAwareInterface
{
    /**
     * @param \RetailCrm\Api\Factory\ApiExceptionFactory $apiExceptionFactory
     */
    public function setApiExceptionFactory(ApiExceptionFactory $apiExceptionFactory); // @phpstan-ignore-line
}
