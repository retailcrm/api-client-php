<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryShipment
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class DeliveryShipment
 *
 * @category DeliveryShipment
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */
class DeliveryShipment
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("integrationCode")
     */
    public $integrationCode;

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
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryType")
     */
    public $deliveryType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("store")
     */
    public $store;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("managerId")
     */
    public $managerId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;

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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder>")
     * @JMS\SerializedName("orders")
     */
    public $orders;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\TimeInterval
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Delivery\TimeInterval")
     * @JMS\SerializedName("lunchTime")
     */
    public $lunchTime;
}
