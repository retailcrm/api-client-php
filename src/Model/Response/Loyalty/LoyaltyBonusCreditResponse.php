<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyBonusCreditResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Model\Response\SuccessResponse;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltyBonusCreditResponse
 *
 * @category LoyaltyBonusCreditResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class LoyaltyBonusCreditResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyBonus
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyBonus")
     * @JMS\SerializedName("loyaltyBonus")
     */
    public $loyaltyBonus;
}
