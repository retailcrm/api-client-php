<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccountCreateRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */

namespace RetailCrm\Api\Model\Request\Loyalty;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class LoyaltyAccountCreateRequest
 *
 * @category LoyaltyAccountCreateRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */
class LoyaltyAccountCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\SerializedCreateLoyaltyAccount
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Loyalty\SerializedCreateLoyaltyAccount")
     * @Form\SerializedName("loyaltyAccount")
     * @Form\JsonField()
     */
    public $loyaltyAccount;
}
