<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderDelivery
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Orders\Delivery;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Entity\Delivery\TimeInterval;

/**
 * Class SerializedOrderDelivery
 *
 * @category SerializedOrderDelivery
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */
class SerializedOrderDelivery
{
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
     * @JMS\SerializedName("integrationCode")
     */
    public $integrationCode;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Delivery\DeliveryData
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Delivery\DeliveryData")
     * @JMS\SerializedName("data")
     */
    public $data;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedDeliveryService
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedDeliveryService")
     * @JMS\SerializedName("service")
     */
    public $service;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cost")
     */
    public $cost;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("netCost")
     */
    public $netCost;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("date")
     */
    public $date;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\TimeInterval
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Delivery\TimeInterval")
     * @JMS\SerializedName("time")
     */
    public $time;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vatRate")
     */
    public $vatRate;
}
