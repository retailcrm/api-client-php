<?php

/**
 * PHP version 7.3
 *
 * @category PriceType
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PriceType
 *
 * @category PriceType
 * @package  RetailCrm\Api\Model\Entity\References
 */
class PriceType
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

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
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("default")
     */
    public $default;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("filterExpression")
     */
    public $filterExpression;

    /**
     * @var \RetailCrm\Api\Model\Entity\References\GeoHierarchyRow[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\GeoHierarchyRow>")
     * @JMS\SerializedName("geo")
     */
    public $geo;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("groups")
     */
    public $groups;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ordering")
     */
    public $ordering;
}
