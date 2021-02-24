<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderDelivery
 * @package  RetailCrm\Api\Model\Entity\Order
 */

namespace RetailCrm\Api\Model\Entity\Order;

use DateTime;
use JMS\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Entity\Delivery\TimeInterval;

/**
 * Class SerializedOrderDelivery
 *
 * @category SerializedOrderDelivery
 * @package  RetailCrm\Api\Model\Entity\Order
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
     * @var \RetailCrm\Api\Interfaces\Order\DeliveryDataInterface
     *
     * @JMS\Type("RetailCrm\Api\Interfaces\Order\DeliveryDataInterface")
     * @JMS\SerializedName("data")
     */
    public $data;

    /**
     * @var \RetailCrm\Api\Model\Entity\Order\SerializedDeliveryService
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Order\SerializedDeliveryService")
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
     * @var TimeInterval
     *
     * @JMS\Type("TimeInterval")
     * @JMS\SerializedName("time")
     */
    public $time;

    /**
     * @var \RetailCrm\Api\Model\Entity\Order\OrderDeliveryAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Order\OrderDeliveryAddress")
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
