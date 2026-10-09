<?php

/**
 * PHP 7.3
 *
 * @category Loyalty
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Loyalty
 *
 * @category Loyalty
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 *
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class Loyalty
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel>")
     * @JMS\SerializedName("levels")
     */
    public $levels;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("expirePeriod")
     */
    public $expirePeriod;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyBurnSetting[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\LoyaltyBurnSetting>")
     * @JMS\SerializedName("burnSettings")
     */
    public $burnSettings;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("blocked")
     */
    public $blocked;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("currency")
     */
    public $currency;

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
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("burnType")
     */
    public $burnType;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("confirmSmsCharge")
     */
    public $confirmSmsCharge;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("confirmSmsRegistration")
     */
    public $confirmSmsRegistration;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("promoChargeAllowed")
     */
    public $promoChargeAllowed;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("maxChargePercent")
     */
    public $maxChargePercent;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("chargeRate")
     */
    public $chargeRate;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("minResidualCost")
     */
    public $minResidualCost;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyEvent[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\LoyaltyEvent>")
     * @JMS\SerializedName("events")
     */
    public $events;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("activatedAt")
     */
    public $activatedAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("deactivatedAt")
     */
    public $deactivatedAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("blockedAt")
     */
    public $blockedAt;
}
