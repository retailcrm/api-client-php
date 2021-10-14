<?php

/**
 * PHP version 7.3
 *
 * @category BonusAccountDetailsResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class BonusAccountDetailsResponse
 *
 * @category BonusAccountDetailsResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class BonusAccountDetailsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Response\Loyalty\LoyaltyBonusStatisticResponse
     *
     * @JMS\Type("RetailCrm\Api\Model\Response\Loyalty\LoyaltyBonusStatisticResponse")
     * @JMS\SerializedName("statistic")
     */
    public $statistic;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\BonusDetail[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\BonusDetail>")
     * @JMS\SerializedName("bonuses")
     */
    public $bonuses;
}
