<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyBonus
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltyBonus
 *
 * @category LoyaltyBonus
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class LoyaltyBonus
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("activationDate")
     */
    public $activationDate;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("expireDate")
     */
    public $expireDate;
}
