<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccountCreateResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class LoyaltyAccountCreateResponse
 *
 * @category LoyaltyAccountCreateResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class LoyaltyAccountCreateResponse extends SuccessResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount")
     * @JMS\SerializedName("loyaltyAccount")
     */
    public $loyaltyAccount;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("warnings")
     */
    public $warnings;
}
