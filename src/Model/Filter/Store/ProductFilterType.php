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
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("minPrice")
     */
    public $minPrice;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("maxPrice")
     */
    public $maxPrice;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("minPurchasePrice")
     */
    public $minPurchasePrice;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("maxPurchasePrice")
     */
    public $maxPurchasePrice;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("minQuantity")
     */
    public $minQuantity;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("maxQuantity")
     */
    public $maxQuantity;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("popular")
     */
    public $popular;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("stock")
     */
    public $stock;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("novelty")
     */
    public $novelty;

    /**
     * @var int
     *
     * @Form\Type("int")
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
     * @var array
     *
     * @Form\Type("array")
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
