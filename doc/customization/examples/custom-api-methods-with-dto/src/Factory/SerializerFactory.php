<?php

/**
 * PHP version 7.3
 *
 * @category SerializerFactory
 * @package  Retailcrm\Examples\CustomMethodsDto\Factory
 */

namespace Retailcrm\Examples\CustomMethodsDto\Factory;

use Liip\Serializer\SerializerInterface;
use RetailCrm\Examples\CustomMethodsDto\Component\Adapter\SymfonyToLiipAdapter;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * Class SerializerFactory
 *
 * @category SerializerFactory
 * @package  Retailcrm\Examples\CustomMethodsDto\Factory
 */
class SerializerFactory
{
    public static function create(): SerializerInterface
    {
        return new SymfonyToLiipAdapter(new Serializer([new ObjectNormalizer()], [new JsonEncoder()]));
    }
}
