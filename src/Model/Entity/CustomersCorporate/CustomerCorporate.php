<?php

/**
 * PHP version 7.3
 *
 * @category CustomerCorporate
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Interfaces\Orders\CustomerInterface;

/**
 * Class CustomerCorporate
 *
 * @category CustomerCorporate
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class CustomerCorporate implements CustomerInterface
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("nickName")
     */
    public $nickName;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput")
     * @JMS\SerializedName("mainAddress")
     */
    public $mainAddress;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("managerId")
     */
    public $managerId;

    /**
     * @var \RetailCrm\Api\Model\Entity\Source
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Source")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact>")
     * @JMS\SerializedName("customerContacts")
     */
    public $customerContacts;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\Company[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomersCorporate\Company>")
     * @JMS\SerializedName("companies")
     */
    public $companies;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerAddress[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\CustomerAddress>")
     * @JMS\SerializedName("addresses")
     */
    public $addresses;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("vip")
     */
    public $vip;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("bad")
     */
    public $bad;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerTag[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\CustomerTag>")
     * @JMS\SerializedName("tags")
     */
    public $tags;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("avgMarginSumm")
     */
    public $avgMarginSumm;

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
     * @JMS\SerializedName("personalDiscount")
     */
    public $personalDiscount;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cumulativeDiscount")
     */
    public $cumulativeDiscount;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("discountCardNumber")
     */
    public $discountCardNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("firstClientId")
     */
    public $firstClientId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lastClientId")
     */
    public $lastClientId;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact")
     * @JMS\SerializedName("mainCustomerContact")
     */
    public $mainCustomerContact;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput")
     * @JMS\SerializedName("mainCompany")
     */
    public $mainCompany;
}
