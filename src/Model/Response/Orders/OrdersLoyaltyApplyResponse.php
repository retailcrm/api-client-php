<?php

/**
 * PHP version 7.3
 *
 * @category OrdersLoyaltyApplyResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */

namespace RetailCrm\Api\Model\Response\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class OrdersLoyaltyApplyResponse
 *
 * @category OrdersLoyaltyApplyResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */
class OrdersLoyaltyApplyResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyaltyOrder
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyaltyOrder")
     * @JMS\SerializedName("order")
     */
    public $order;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\SmsVerification
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\SmsVerification")
     * @JMS\SerializedName("verification")
     */
    public $verification;
}
