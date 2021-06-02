<?php

/**
 * PHP version 7.3
 *
 * @category ProductFilterType
 * @package  RetailCrm\Api\Model\Filter\Store
 */

namespace RetailCrm\Api\Model\Filter\Store;

use DateTime;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class ProductFilterType
 *
 * @category ProductFilterType
 * @package  RetailCrm\Api\Model\Filter\Store
 */
class ProductFilterType
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("active")
     */
    public $active;

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
     * @Form\SerializedName("minPrice")
     */
    public $minPrice;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxPrice")
     */
    public $maxPrice;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minPurchasePrice")
     */
    public $minPurchasePrice;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxPurchasePrice")
     */
    public $maxPurchasePrice;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minQuantity")
     */
    public $minQuantity;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxQuantity")
     */
    public $maxQuantity;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("popular")
     */
    public $popular;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("stock")
     */
    public $stock;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("novelty")
     */
    public $novelty;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("recommended")
     */
    public $recommended;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("url")
     */
    public $url;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("manufacturer")
     */
    public $manufacturer;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("xmlId")
     */
    public $xmlId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("classSegment")
     */
    public $classSegment;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("offerIds")
     */
    public $offerIds;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("properties")
     */
    public $properties;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("offerExternalId")
     */
    public $offerExternalId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("offerXmlId")
     */
    public $offerXmlId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("groupExternalId")
     */
    public $groupExternalId;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("groups")
     */
    public $groups;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("priceType")
     */
    public $priceType;

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
     * @Form\SerializedName("catalogs")
     */
    public $catalogs;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("sinceId")
     */
    public $sinceId;

    /**
     * @var DateTime
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("sinceUpdatedAt")
     */
    public $sinceUpdatedAt;
}
