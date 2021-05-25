<?php

/**
 * PHP version 7.3
 *
 * @category SerializerAwareTrait
 * @package  RetailCrm\Api\Traits
 */

namespace RetailCrm\Api\Traits;

use Liip\Serializer\SerializerInterface;

/**
 * Trait SerializerAwareTrait
 *
 * @category SerializerAwareTrait
 * @package  RetailCrm\Api\Traits
 */
trait SerializerAwareTrait
{
    /** @var \Liip\Serializer\SerializerInterface */
    protected $serializer;

    /**
     * @param \Liip\Serializer\SerializerInterface $serializer
     *
     * @return self
     */
    public function setSerializer(SerializerInterface $serializer): self
    {
        $this->serializer = $serializer;
        return $this;
    }

    /**
     * @return \Liip\Serializer\SerializerInterface
     */
    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }
}
