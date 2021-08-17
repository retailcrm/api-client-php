<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccountResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class LoyaltyAccountResponse
 *
 * @category LoyaltyAccountResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class LoyaltyAccountResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount")
     * @JMS\SerializedName("loyaltyAccount")
     */
    public $loyaltyAccount;
}
