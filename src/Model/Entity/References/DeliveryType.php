<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryType
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class DeliveryType
 *
 * @category DeliveryType
 * @package  RetailCrm\Api\Model\Entity\References
 */
class DeliveryType
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("defaultCost")
     */
    public $defaultCost;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("defaultNetCost")
     */
    public $defaultNetCost;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var array<string>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("paymentTypes")
     */
    public $paymentTypes;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("integrationCode")
     */
    public $integrationCode;

    /**
     * @var array<string>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("deliveryServices")
     */
    public $deliveryServices;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("defaultForCrm")
     */
    public $defaultForCrm;

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
     * @JMS\SerializedName("defaultTariffCode")
     */
    public $defaultTariffCode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("defaultTariffType")
     */
    public $defaultTariffType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("defaultTariffName")
     */
    public $defaultTariffName;
}
