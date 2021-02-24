<?php

/**
 * PHP version 7.3
 *
 * @category SkippableHandlerTrait
 * @package  RetailCrm\Api\Component\Serializer
 */

namespace RetailCrm\Api\Component\Serializer;

use JMS\Serializer\Exception\SkipHandlerException;

/**
 * Trait SkippableHandlerTrait
 *
 * @category SkippableHandlerTrait
 * @package  RetailCrm\Api\Component\Serializer
 */
trait SkippableHandlerTrait
{
    /**
     * Skips handler.
     */
    private static function skip(): void
    {
        throw new SkipHandlerException('Skipped.');
    }
}
