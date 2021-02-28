<?php

/**
 * PHP version 7.3
 *
 * @category CustomerCorporateHistory
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomerCorporateHistory
 *
 * @category CustomerCorporateHistory
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class CustomerCorporateHistory
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
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\CustomerAddress")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate")
     * @JMS\SerializedName("combinedTo")
     */
    public $combinedTo;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact")
     * @JMS\SerializedName("customerContact")
     */
    public $customerContact;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\Company
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\Company")
     * @JMS\SerializedName("company")
     */
    public $company;
}
