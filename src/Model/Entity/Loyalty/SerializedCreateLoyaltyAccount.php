<?php

/**
 * PHP version 7.3
 *
 * @category SerializedCreateLoyaltyAccount
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedCreateLoyaltyAccount
 *
 * @category SerializedCreateLoyaltyAccount
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class SerializedCreateLoyaltyAccount
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phoneNumber")
     */
    public $phoneNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cardNumber")
     */
    public $cardNumber;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("customFields")
     */
    public $customFields;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer")
     * @JMS\SerializedName("customer")
     */
    public $customer;
}
