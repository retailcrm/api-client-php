<?php

/**
 * PHP version 7.3
 *
 * @category Customer
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Interfaces\Orders\CustomerInterface;

/**
 * Class Customer
 *
 * @category Customer
 * @package  RetailCrm\Api\Model\Entity\Customers
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class Customer implements CustomerInterface
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
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isContact")
     */
    public $isContact;

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
     * @JMS\SerializedName("browserId")
     */
    public $browserId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerContragent
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\CustomerContragent")
     * @JMS\SerializedName("contragent")
     */
    public $contragent;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerTag[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\CustomerTag>")
     * @JMS\SerializedName("tags")
     */
    public $tags;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("addTags")
     */
    public $addTags;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("removeTags")
     */
    public $removeTags;

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
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerAddress
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\CustomerAddress")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Segment[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\Segment>")
     * @JMS\SerializedName("segments")
     */
    public $segments;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("maturationTime")
     */
    public $maturationTime;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("firstName")
     */
    public $firstName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lastName")
     */
    public $lastName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("patronymic")
     */
    public $patronymic;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sex")
     */
    public $sex;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("presumableSex")
     */
    public $presumableSex;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    public $email;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("emailMarketingUnsubscribedAt")
     */
    public $emailMarketingUnsubscribedAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerPhone[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\CustomerPhone>")
     * @JMS\SerializedName("phones")
     */
    public $phones;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("birthday")
     */
    public $birthday;

    /**
     * @var \RetailCrm\Api\Model\Entity\Source
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Source")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("photoUrl")
     */
    public $photoUrl;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("mgCustomerId")
     */
    public $mgCustomerId;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("subscribed")
     */
    public $subscribed;
}
