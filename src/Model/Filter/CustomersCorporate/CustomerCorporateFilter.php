<?php

/**
 * PHP version 7.3
 *
 * @category CustomerCorporateFilter
 * @package  RetailCrm\Api\Model\Filter\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Filter\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomerCorporateFilter
 *
 * @category CustomerCorporateFilter
 * @package  RetailCrm\Api\Model\Filter\CustomersCorporate
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class CustomerCorporateFilter
{
    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("nickName")
     */
    public $nickName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contactName")
     */
    public $contactName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("addressName")
     */
    public $addressName;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("contragentName")
     */
    public $contragentName;

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
     * @Form\SerializedName("contragentTypes")
     */
    public $contragentTypes;

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
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("contactIds")
     */
    public $contactIds;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("companyName")
     */
    public $companyName;
}
