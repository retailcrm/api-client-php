<?php

/**
 * PHP version 7.3
 *
 * @category SaveDeliveryData
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SaveDeliveryData
 *
 * @category SaveDeliveryData
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class SaveDeliveryData
{
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

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\PaymentType
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\PaymentType")
     * @JMS\SerializedName("codPaymentType")
     */
    public $codPaymentType;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("withCod")
     */
    public $withCod;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cod")
     */
    public $cod;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cost")
     */
    public $cost;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vatRate")
     */
    public $vatRate;

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
     * @JMS\SerializedName("payerType")
     */
    public $payerType;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("shipmentDate")
     */
    public $shipmentDate;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
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
     * @var mixed[][]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;
}
