<?php

/**
 * PHP version 7.3
 *
 * @category ReflectionUtils
 * @package  RetailCrm\Dev\TestUtils
 */

namespace RetailCrm\Dev\TestUtils;

use ReflectionProperty;

/**
 * Class ReflectionUtils
 *
 * @category ReflectionUtils
 * @package  RetailCrm\Dev\TestUtils
 */
class ReflectionUtils
{
    /**
     * Extracts property from provided object.
     *
     * @param object $object
     * @param string $property
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public static function getProperty($object, string $property)
    {
        $property = new ReflectionProperty($object, $property);
        $property->setAccessible(true);

        return $property->getValue($object);
    }
}
