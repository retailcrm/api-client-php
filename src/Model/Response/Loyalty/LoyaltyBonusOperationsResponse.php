<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyBonusOperationsResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class LoyaltyBonusOperationsResponse
 *
 * @category LoyaltyBonusOperationsResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class LoyaltyBonusOperationsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\Operation[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\Operation>")
     * @JMS\SerializedName("bonusOperations")
     */
    public $bonusOperations;
}
