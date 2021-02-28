<?php

/**
 * PHP version 7.3
 *
 * @category CustomerHistory
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomerHistory
 *
 * @category CustomerHistory
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class CustomerHistory
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("created")
     */
    public $created;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("deleted")
     */
    public $deleted;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryUser
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\HistoryUser")
     * @JMS\SerializedName("user")
     */
    public $user;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("field")
     */
    public $field;

    /**
     * @var mixed
     *
     * @JMS\Type("mixed")
     * @JMS\SerializedName("oldValue")
     */
    public $oldValue;

    /**
     * @var mixed
     *
     * @JMS\Type("mixed")
     * @JMS\SerializedName("newValue")
     */
    public $newValue;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryApiKey
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\HistoryApiKey")
     * @JMS\SerializedName("apiKey")
     */
    public $apiKey;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\Customer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\HistoryAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\HistoryAddress")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\Customer")
     * @JMS\SerializedName("combinedTo")
     */
    public $combinedTo;
}
