<?php

/**
 * PHP version 7.3
 *
 * @category SerializerFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Liip\Serializer\Serializer;
use Liip\Serializer\SerializerInterface;
use RetailCrm\Api\Component\Utils;

/**
 * Class SerializerFactory
 *
 * @category SerializerFactory
 * @package  RetailCrm\Api\Factory
 */
class SerializerFactory
{
    /**
     * Builds Liip Serializer
     *
     * @return \Liip\Serializer\SerializerInterface
     */
    public static function create(): SerializerInterface
    {
        return new Serializer(Utils::getModelsCacheDirectory());
    }
}
