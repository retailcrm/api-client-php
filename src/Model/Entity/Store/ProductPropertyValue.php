<?php

/**
 * PHP version 7.3
 *
 * @category ProductPropertyValue
 * @package  RetailCrm\Api\Model\Entity\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ProductPropertyValue
 *
 * @category ProductPropertyValue
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class ProductPropertyValue
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\ProductProperty
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Store\ProductProperty")
     * @JMS\SerializedName("property")
     */
    public $property;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("value")
     */
    public $value;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("offersCount")
     */
    public $offersCount;
}
