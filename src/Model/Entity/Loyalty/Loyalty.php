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
