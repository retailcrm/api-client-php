<?php

/**
 * PHP version 7.3
 *
 * @category Site
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Site
 *
 * @category Site
 * @package  RetailCrm\Api\Model\Entity\References
 */
class Site
{
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
     * @JMS\SerializedName("url")
     */
    public $url;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phones")
     */
    public $phones;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("zip")
     */
    public $zip;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("defaultForCrm")
     */
    public $defaultForCrm;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ymlUrl")
     */
    public $ymlUrl;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("loadFromYml")
     */
    public $loadFromYml;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("catalogUpdatedAt")
     */
    public $catalogUpdatedAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("catalogLoadingAt")
     */
    public $catalogLoadingAt;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ordering")
     */
    public $ordering;

    /**
     * @var \RetailCrm\Api\Model\Entity\References\LegalEntity
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\References\LegalEntity")
     * @JMS\SerializedName("contragent")
     */
    public $contragent;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contragentCode")
     */
    public $contragentCode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("countryIso")
     */
    public $countryIso;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("senderEmail")
     */
    public $senderEmail;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("senderName")
     */
    public $senderName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("catalogId")
     */
    public $catalogId;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isCatalogMainSite")
     */
    public $isCatalogMainSite;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isDemo")
     */
    public $isDemo;
}
