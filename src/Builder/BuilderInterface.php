<?php

/**
 * PHP version 7.3
 *
 * @category BuilderInterface
 * @package  RetailCrm\Api\Builder
 */

namespace RetailCrm\Api\Builder;

/**
 * Interface BuilderInterface
 *
 * @category BuilderInterface
 * @package  RetailCrm\Api\Builder
 */
interface BuilderInterface
{
    /**
     * Builds something, returns result.
     *
     * @return mixed
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    public function build();
}
