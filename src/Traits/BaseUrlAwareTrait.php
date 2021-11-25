<?php

/**
 * PHP version 7.3
 *
 * @category BaseUrlAwareTrait
 * @package  RetailCrm\Api\Traits
 */

namespace RetailCrm\Api\Traits;

/**
 * Trait BaseUrlAwareTrait
 *
 * @category BaseUrlAwareTrait
 * @package  RetailCrm\Api\Traits
 */
trait BaseUrlAwareTrait
{
    /** @var string */
    protected $baseUrl;

    /**
     * Returns API routes with base URI prepended.
     *
     * @param string $route
     *
     * @return string
     */
    protected function route(string $route): string
    {
        return sprintf('%s/%s', $this->baseUrl, $route);
    }
}
