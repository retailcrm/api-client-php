<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccountEditRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */

namespace RetailCrm\Api\Model\Request\Loyalty;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount;

/**
 * Class LoyaltyAccountEditRequest
 *
 * @category LoyaltyAccountEditRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */
class LoyaltyAccountEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount")
     * @Form\SerializedName("loyaltyAccount")
     * @Form\JsonField()
     */
    public $loyaltyAccount;

    /**
     * LoyaltyAccountEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount $loyaltyAccount
     */
    public function __construct(LoyaltyAccount $loyaltyAccount)
    {
        $this->loyaltyAccount = $loyaltyAccount;
    }
}
