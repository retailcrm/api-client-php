<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyBonusChargeRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */

namespace RetailCrm\Api\Model\Request\Loyalty;

use DateTime;
use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class LoyaltyBonusChargeRequest
 *
 * @category LoyaltyBonusChargeRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */
class LoyaltyBonusChargeRequest implements RequestInterface
{
    /**
     * @var float
     *
     * @Form\Type("float")
     * @Form\SerializedName("amount")
     */
    public $amount;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("comment")
     */
    public $comment;
}
