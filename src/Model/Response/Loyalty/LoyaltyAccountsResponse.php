<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccountsResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class LoyaltyAccountsResponse
 *
 * @category LoyaltyAccountsResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class LoyaltyAccountsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount>")
     * @JMS\SerializedName("loyaltyAccounts")
     */
    public $loyaltyAccounts;
}
