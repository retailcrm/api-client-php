<?php

/**
 * PHP version 7.3
 *
 * @category BuilderInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

/**
 * Interface BuilderInterface
 *
 * @category BuilderInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface BuilderInterface
{
    /**
     * Builds something, returns result.
     *
     * @return mixed
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    public function build();
}
