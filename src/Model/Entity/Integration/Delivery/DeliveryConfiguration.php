<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Integration\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class DeliveryConfiguration
 *
 * @category DeliveryConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 *
 * @SuppressWarnings(PHPMD.LongVariables)
 */
class DeliveryConfiguration
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var array<string, string>
     *
     * @JMS\Type("array<string, string>")
     * @JMS\SerializedName("actions")
     */
    public $actions;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("payerType")
     */
    public $payerType;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("platePrintLimit")
     */
    public $platePrintLimit;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("rateDeliveryCost")
     */
    public $rateDeliveryCost;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("allowPackages")
     */
    public $allowPackages;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("codAvailable")
     */
    public $codAvailable;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("selfShipmentAvailable")
     */
    public $selfShipmentAvailable;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("duplicateOrderProductSupported")
     */
    public $duplicateOrderProductSupported;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("allowTrackNumber")
     */
    public $allowTrackNumber;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("availableCountries")
     */
    public $availableCountries;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("requiredFields")
     */
    public $requiredFields;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Delivery\Status[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Delivery\Status>")
     * @JMS\SerializedName("statusList")
     */
    public $statusList;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Delivery\Plate[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Delivery\Plate>")
     * @JMS\SerializedName("plateList")
     */
    public $plateList;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField>")
     * @JMS\SerializedName("deliveryDataFieldList")
     */
    public $deliveryDataFieldList;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField>")
     * @JMS\SerializedName("shipmentDataFieldList")
     */
    public $shipmentDataFieldList;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Delivery\Settings
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Delivery\Settings")
     * @JMS\SerializedName("settings")
     */
    public $settings;
}
