<?php

/**
 * PHP version 7.3
 *
 * @category EncoderTestObject
 * @package  Test
 */

namespace RetailCrm\Test;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class EncoderTestObject
 *
 * @category EncoderTestObject
 * @package  Test
 */
class EncoderTestObject
{
    /**
     * @var string
     *
     * @Form\Type("boolean")
     * @Form\SerializedName("exists")
     */
    public $keyExists;

    /**
     * @var mixed[]
     *
     * @Form\Type("array")
     * @Form\SerializedName("filter")
     */
    public $keyFilter;

    /**
     * @var self
     *
     * @Form\Type("RetailCrm\Test\EncoderTestObject")
     * @Form\SerializedName("encodedSelf")
     * @Form\JsonField()
     */
    public $self;
}
