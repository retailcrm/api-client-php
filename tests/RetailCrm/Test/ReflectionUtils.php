<?php

/**
 * PHP version 7.3
 *
 * @category ReflectionUtils
 * @package  RetailCrm\Test
 */

namespace RetailCrm\Test;

use ReflectionProperty;

/**
 * Class ReflectionUtils
 *
 * @category ReflectionUtils
 * @package  RetailCrm\Test
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
