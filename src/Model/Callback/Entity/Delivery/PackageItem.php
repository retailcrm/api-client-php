<?php

/**
 * PHP version 7.3
 *
 * @category PackageItem
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PackageItem
 *
 * @category PackageItem
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class PackageItem
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("offerId")
     */
    public $offerId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("xmlId")
     */
    public $xmlId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("declaredValue")
     */
    public $declaredValue;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cod")
     */
    public $cod;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vatRate")
     */
    public $vatRate;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Unit
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\Unit")
     * @JMS\SerializedName("unit")
     */
    public $unit;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cost")
     */
    public $cost;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("markingCodes")
     */
    public $markingCodes;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("properties")
     */
    public $properties;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("weight")
     */
    public $weight;
}
