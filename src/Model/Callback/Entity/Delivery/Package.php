<?php

/**
 * PHP version 7.3
 *
 * @category Package
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Package
 *
 * @category Package
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class Package
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("weight")
     */
    public $weight;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("packageId")
     */
    public $packageId;

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
     * @JMS\SerializedName("length")
     */
    public $length;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("height")
     */
    public $height;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\PackageItem[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\PackageItem>")
     * @JMS\SerializedName("items")
     */
    public $items;
}
