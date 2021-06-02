<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccountApiFilterType
 * @package  RetailCrm\Api\Model\Filter\Loyalty
 */

namespace RetailCrm\Api\Model\Filter\Loyalty;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class LoyaltyAccountApiFilterType
 *
 * @category LoyaltyAccountApiFilterType
 * @package  RetailCrm\Api\Model\Filter\Loyalty
 */
class LoyaltyAccountApiFilterType
{
    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("status")
     */
    public $status;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minAmount")
     */
    public $minAmount;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxAmount")
     */
    public $maxAmount;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minOrdersSum")
     */
    public $minOrdersSum;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxOrdersSum")
     */
    public $maxOrdersSum;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("createdAtFrom")
     */
    public $createdAtFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("createdAtTo")
     */
    public $createdAtTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("customer")
     */
    public $customer;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("phoneNumber")
     */
    public $phoneNumber;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("cardNumber")
     */
    public $cardNumber;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("burnDateFrom")
     */
    public $burnDateFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("burnDateTo")
     */
    public $burnDateTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("customerId")
     */
    public $customerId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("customerExternalId")
     */
    public $customerExternalId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("id")
     */
    public $id;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("loyalties")
     */
    public $loyalties;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("sites")
     */
    public $sites;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("level")
     */
    public $level;

    /**
     * @var array<string, mixed>
     *
     * @Form\Type("array")
     * @Form\SerializedName("customFields")
     */
    public $customFields;
}
