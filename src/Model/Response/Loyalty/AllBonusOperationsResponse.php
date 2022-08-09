<?php

/**
 * PHP version 7.3
 *
 * @category AllBonusOperationsResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Model\Response\AbstractCursorPaginatedResponse;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class AllBonusOperationsResponse
 *
 * @category AllBonusOperationsResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class AllBonusOperationsResponse extends AbstractCursorPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\Operation[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\Operation>")
     * @JMS\SerializedName("bonusOperations")
     */
    public $bonusOperations;
}
