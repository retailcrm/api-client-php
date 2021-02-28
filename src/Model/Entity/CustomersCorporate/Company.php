<?php

/**
 * PHP version 7.3
 *
 * @category Company
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Company
 *
 * @category Company
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class Company
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isMain")
     */
    public $isMain;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("brand")
     */
    public $brand;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerContragent
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\CustomerContragent")
     * @JMS\SerializedName("contragent")
     */
    public $contragent;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\CustomerAddress")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("customFields")
     */
    public $customFields;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("marginSumm")
     */
    public $marginSumm;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("totalSumm")
     */
    public $totalSumm;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("averageSumm")
     */
    public $averageSumm;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ordersCount")
     */
    public $ordersCount;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("costSumm")
     */
    public $costSumm;
}
