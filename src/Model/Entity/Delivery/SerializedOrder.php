<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrder
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedOrder
 *
 * @category SerializedOrder
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */
class SerializedOrder
{
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
     * @var \RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct>")
     * @JMS\SerializedName("items")
     */
    public $items;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\SerializedOrderDelivery
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Delivery\SerializedOrderDelivery")
     * @JMS\SerializedName("delivery")
     */
    public $delivery;
}
