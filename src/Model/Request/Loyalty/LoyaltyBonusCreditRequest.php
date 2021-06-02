<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyBonusCreditRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */

namespace RetailCrm\Api\Model\Request\Loyalty;

use DateTime;
use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class LoyaltyBonusCreditRequest
 *
 * @category LoyaltyBonusCreditRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */
class LoyaltyBonusCreditRequest implements RequestInterface
{
    /**
     * @var float
     *
     * @Form\Type("float")
     * @Form\SerializedName("amount")
     */
    public $amount;

    /**
     * @var DateTime
     *
     * @Form\Type("DateTime<'Y-m-d'>")
     * @Form\SerializedName("activationDate")
     */
    public $activationDate;

    /**
     * @var DateTime
     *
     * @Form\Type("DateTime<'Y-m-d'>")
     * @Form\SerializedName("expireDate")
     */
    public $expireDate;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("comment")
     */
    public $comment;
}
