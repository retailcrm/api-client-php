<?php

/**
 * PHP version 7.3
 *
 * @category RequestShipmentSave
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class RequestShipmentSave
 *
 * @category RequestShipmentSave
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */
class RequestShipmentSave
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shipmentId")
     */
    public $shipmentId;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Manager
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\Manager")
     * @JMS\SerializedName("manager")
     */
    public $manager;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
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
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("store")
     */
    public $store;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\ShipmentOrder[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\ShipmentOrder>")
     * @JMS\SerializedName("orders")
     */
    public $orders;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;

    /**
     * @var mixed[][]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;
}
