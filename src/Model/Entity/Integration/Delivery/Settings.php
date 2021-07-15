<?php

/**
 * PHP version 7.3
 *
 * @category Settings
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Integration\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Settings
 *
 * @category Settings
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */
class Settings
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("defaultPayerType")
     */
    public $defaultPayerType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("costCalculateBy")
     */
    public $costCalculateBy;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("nullDeclaredValue")
     */
    public $nullDeclaredValue;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("lockedByDefault")
     */
    public $lockedByDefault;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Delivery\PaymentType>")
     * @JMS\SerializedName("paymentTypes")
     */
    public $paymentTypes;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint>")
     * @JMS\SerializedName("shipmentPoints")
     */
    public $shipmentPoints;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Delivery\SettingsStatus[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Delivery\SettingsStatus>")
     * @JMS\SerializedName("statuses")
     */
    public $statuses;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("deliveryExtraData")
     */
    public $deliveryExtraData;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("shipmentExtraData")
     */
    public $shipmentExtraData;
}
