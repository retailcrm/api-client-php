<?php

/**
 * PHP version 7.3
 *
 * @category Package
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Orders\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Package
 *
 * @category Package
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */
class Package
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("packageId")
     */
    public $packageId;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("weight")
     */
    public $weight;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("length")
     */
    public $length;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("width")
     */
    public $width;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("height")
     */
    public $height;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItem[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItem>")
     * @JMS\SerializedName("items")
     */
    public $items;
}
