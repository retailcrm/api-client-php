<?php

/**
 * PHP version 7.3
 *
 * @category SerializedCustomDictionaryElement
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */

namespace RetailCrm\Api\Model\Entity\CustomFields;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedCustomDictionaryElement
 *
 * @category SerializedCustomDictionaryElement
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */
class SerializedCustomDictionaryElement
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ordering")
     */
    public $ordering;
}
