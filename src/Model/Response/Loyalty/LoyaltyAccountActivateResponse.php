<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccountActivateResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class LoyaltyAccountActivateResponse
 *
 * @category LoyaltyAccountActivateResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class LoyaltyAccountActivateResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount")
     * @JMS\SerializedName("loyaltyAccount")
     */
    public $loyaltyAccount;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\SmsVerification
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\SmsVerification")
     * @JMS\SerializedName("verification")
     */
    public $verification;
}
