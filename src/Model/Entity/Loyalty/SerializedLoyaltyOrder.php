<?php

/**
 * PHP version 7.3
 *
 * @category SerializedLoyaltyOrder
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedLoyaltyOrder
 *
 * @category SerializedLoyaltyOrder
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 *
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class SerializedLoyaltyOrder
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("bonusesCreditTotal")
     */
    public $bonusesCreditTotal;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("bonusesChargeTotal")
     */
    public $bonusesChargeTotal;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("privilegeType")
     */
    public $privilegeType;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("totalSumm")
     */
    public $totalSumm;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("personalDiscountPercent")
     */
    public $personalDiscountPercent;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount")
     * @JMS\SerializedName("loyaltyAccount")
     */
    public $loyaltyAccount;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel")
     * @JMS\SerializedName("loyaltyLevel")
     */
    public $loyaltyLevel;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyEventDiscount
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyEventDiscount")
     * @JMS\SerializedName("loyaltyEventDiscount")
     */
    public $loyaltyEventDiscount;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\Customer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery")
     * @JMS\SerializedName("delivery")
     */
    public $delivery;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\OrderProduct[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\OrderProduct>")
     * @JMS\SerializedName("items")
     */
    public $items;
}
