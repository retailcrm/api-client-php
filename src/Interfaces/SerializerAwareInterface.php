<?php

/**
 * PHP version 7.3
 *
 * @category SerializerAwareInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use Liip\Serializer\SerializerInterface;

/**
 * Interface SerializerAwareInterface
 *
 * @category SerializerAwareInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface SerializerAwareInterface
{
    /**
     * @param \Liip\Serializer\SerializerInterface $serializer
     */
    public function setSerializer(SerializerInterface $serializer); // @phpstan-ignore-line

    /**
     * @return \Liip\Serializer\SerializerInterface
     */
    public function getSerializer(): SerializerInterface;
}
