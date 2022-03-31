<?php

/**
 * PHP version 7.3
 *
 * @category RequestCalculate
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class RequestCalculate
 *
 * @category RequestCalculate
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */
class RequestCalculate
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Package[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\Package>")
     * @JMS\SerializedName("packages")
     */
    public $packages;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("payerType")
     */
    public $payerType;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("declaredValue")
     */
    public $declaredValue;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress")
     * @JMS\SerializedName("shipmentAddress")
     */
    public $shipmentAddress;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\BaseStore
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\BaseStore")
     * @JMS\SerializedName("store")
     */
    public $store;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress")
     * @JMS\SerializedName("deliveryAddress")
     */
    public $deliveryAddress;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cod")
     */
    public $cod;

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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("currency")
     */
    public $currency;

    /**
     * @var mixed[][]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;
}
