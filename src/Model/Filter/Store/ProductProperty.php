<?php

/**
 * PHP version 7.3
 *
 * @category ProductProperty
 * @package  RetailCrm\Api\Model\Filter\Store
 */

namespace RetailCrm\Api\Model\Filter\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ProductProperty
 *
 * @category ProductProperty
 * @package  RetailCrm\Api\Model\Filter\Store
 */
class ProductProperty
{
    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("sites")
     */
    public $sites;

    /**
     * @var \RetailCrm\Api\Model\Filter\Store\ProductPropertyGroup[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Filter\Store\ProductPropertyGroup>")
     * @JMS\SerializedName("groups")
     */
    public $groups;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isNumeric")
     */
    public $isNumeric;
}
