<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyCalculateResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class LoyaltyCalculateResponse
 *
 * @category LoyaltyCalculateResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class LoyaltyCalculateResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyaltyOrder
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyaltyOrder")
     * @JMS\SerializedName("order")
     */
    public $order;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyCalculation[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\LoyaltyCalculation>")
     * @JMS\SerializedName("calculations")
     */
    public $calculations;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyalty
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyalty")
     * @JMS\SerializedName("loyalty")
     */
    public $loyalty;
}
