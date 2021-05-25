<?php

/**
 * PHP version 7.3
 *
 * @category ApiExceptionFactoryAwareTrait
 * @package  RetailCrm\Api\Traits
 */

namespace RetailCrm\Api\Traits;

use RetailCrm\Api\Factory\ApiExceptionFactory;

/**
 * Trait ApiExceptionFactoryAwareTrait
 *
 * @category ApiExceptionFactoryAwareTrait
 * @package  RetailCrm\Api\Traits
 */
trait ApiExceptionFactoryAwareTrait
{
    /** @var \RetailCrm\Api\Factory\ApiExceptionFactory */
    protected $apiExceptionFactory;

    /**
     * @param \RetailCrm\Api\Factory\ApiExceptionFactory $apiExceptionFactory
     *
     * @return self
     */
    public function setApiExceptionFactory(ApiExceptionFactory $apiExceptionFactory): self
    {
        $this->apiExceptionFactory = $apiExceptionFactory;
        return $this;
    }
}
