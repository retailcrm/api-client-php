<?php

/**
 * PHP version 7.3
 *
 * @category FormEncoderInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use Liip\Serializer\SerializerInterface;

/**
 * Interface FormEncoderInterface
 *
 * @category FormEncoderInterface
 * @package  RetailCrm\Api\Interfaces
 * @see \RetailCrm\Api\Component\FormData\FormEncoder
 */
interface FormEncoderInterface
{
    /**
     * Encodes provided object into a form data
     *
     * @param mixed  $object
     * @param string $type
     *
     * @return string
     */
    public function encode($object, string $type = ''): string;

    /**
     * Encodes provided object into an array.
     *
     * @param mixed  $object
     * @param string $type
     *
     * @return array<mixed>
     */
    public function encodeArray($object, string $type = ''): array;

    /**
     * Returns underlying serializer instance.
     *
     * @return \Liip\Serializer\SerializerInterface
     */
    public function getSerializer(): SerializerInterface;
}
