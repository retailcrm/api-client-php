<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyCalculation
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltyCalculation
 *
 * @category LoyaltyCalculation
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class LoyaltyCalculation
{
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
     * @JMS\SerializedName("discount")
     */
    public $discount;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("creditBonuses")
     */
    public $creditBonuses;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyEventDiscount
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyEventDiscount")
     * @JMS\SerializedName("loyaltyEventDiscount")
     */
    public $loyaltyEventDiscount;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("maxChargeBonuses")
     */
    public $maxChargeBonuses;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("maximum")
     */
    public $maximum;
}
