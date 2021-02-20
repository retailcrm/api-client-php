<?php

/**
 * PHP version 7.3
 *
 * @category CustomerFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */

namespace RetailCrm\Api\Model\Filter\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomerFilter
 *
 * @category CustomerFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class CustomerFilter
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("isContact")
     */
    public $isContact;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("online")
     */
    public $online;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("sex")
     */
    public $sex;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("emailMarketingUnsubscribed")
     */
    public $emailMarketingUnsubscribed;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("countries")
     */
    public $countries;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentName")
     */
    public $contragentName;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("contragentTypes")
     */
    public $contragentTypes;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentInn")
     */
    public $contragentInn;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentKpp")
     */
    public $contragentKpp;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentBik")
     */
    public $contragentBik;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentCorrAccount")
     */
    public $contragentCorrAccount;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentBankAccount")
     */
    public $contragentBankAccount;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("externalIds")
     */
    public $externalIds;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("city")
     */
    public $city;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("region")
     */
    public $region;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("email")
     */
    public $email;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("notes")
     */
    public $notes;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minOrdersCount")
     */
    public $minOrdersCount;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxOrdersCount")
     */
    public $maxOrdersCount;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minAverageSumm")
     */
    public $minAverageSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxAverageSumm")
     */
    public $maxAverageSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minTotalSumm")
     */
    public $minTotalSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxTotalSumm")
     */
    public $maxTotalSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("classSegment")
     */
    public $classSegment;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("discountCardNumber")
     */
    public $discountCardNumber;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("attachments")
     */
    public $attachments;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minCostSumm")
     */
    public $minCostSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxCostSumm")
     */
    public $maxCostSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("vip")
     */
    public $vip;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("bad")
     */
    public $bad;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("tasksCounts")
     */
    public $tasksCounts;

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
     * @Form\SerializedName("segment")
     */
    public $segment;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("mgChannels")
     */
    public $mgChannels;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("sites")
     */
    public $sites;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("managers")
     */
    public $managers;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("managerGroups")
     */
    public $managerGroups;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("firstWebVisitFrom")
     */
    public $firstWebVisitFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("firstWebVisitTo")
     */
    public $firstWebVisitTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("lastWebVisitFrom")
     */
    public $lastWebVisitFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("lastWebVisitTo")
     */
    public $lastWebVisitTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("dateFrom")
     */
    public $dateFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("dateTo")
     */
    public $dateTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("firstOrderFrom")
     */
    public $firstOrderFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("firstOrderTo")
     */
    public $firstOrderTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("lastOrderFrom")
     */
    public $lastOrderFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("lastOrderTo")
     */
    public $lastOrderTo;

    /**
     * @var array<string, mixed>
     *
     * @Form\Type("array")
     * @Form\SerializedName("customFields")
     */
    public $customFields;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("browserId")
     */
    public $browserId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("commentary")
     */
    public $commentary;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("sourceName")
     */
    public $sourceName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("mediumName")
     */
    public $mediumName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("campaignName")
     */
    public $campaignName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("keywordName")
     */
    public $keywordName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("adContentName")
     */
    public $adContentName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("mgCustomerId")
     */
    public $mgCustomerId;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("tags")
     */
    public $tags;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("attachedTags")
     */
    public $attachedTags;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("mgCustomerIds")
     */
    public $mgCustomerIds;
}
