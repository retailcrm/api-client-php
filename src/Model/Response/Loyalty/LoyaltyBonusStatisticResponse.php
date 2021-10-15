<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyBonusStatisticResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltyBonusStatisticResponse
 *
 * @category LoyaltyBonusStatisticResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class LoyaltyBonusStatisticResponse
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("totalAmount")
     */
    public $totalAmount;
}
