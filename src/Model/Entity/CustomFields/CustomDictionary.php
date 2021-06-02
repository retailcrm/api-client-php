<?php

/**
 * PHP version 7.3
 *
 * @category CustomDictionary
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */

namespace RetailCrm\Api\Model\Entity\CustomFields;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomDictionary
 *
 * @category CustomDictionary
 * @package  RetailCrm\Api\Model\Entity\CustomFields
 */
class CustomDictionary
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
     * @var \RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement>")
     * @JMS\SerializedName("elements")
     */
    public $elements;
}
