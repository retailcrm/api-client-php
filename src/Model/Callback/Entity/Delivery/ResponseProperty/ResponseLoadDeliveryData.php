<?php

/**
 * PHP version 7.3
 *
 * @category ResponseLoadDeliveryData
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ResponseLoadDeliveryData
 *
 * @category ResponseLoadDeliveryData
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty
 */
class ResponseLoadDeliveryData
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("trackNumber")
     */
    public $trackNumber;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cost")
     */
    public $cost;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("shipmentDate")
     */
    public $shipmentDate;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("deliveryDate")
     */
    public $deliveryDate;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\TimeInterval
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Delivery\TimeInterval")
     * @JMS\SerializedName("deliveryTime")
     */
    public $deliveryTime;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("tariff")
     */
    public $tariff;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("tariffName")
     */
    public $tariffName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("payerType")
     */
    public $payerType;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\StatusInfo
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Delivery\StatusInfo")
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var mixed[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress")
     * @JMS\SerializedName("shipmentAddress")
     */
    public $shipmentAddress;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress")
     * @JMS\SerializedName("deliveryAddress")
     */
    public $deliveryAddress;
}
