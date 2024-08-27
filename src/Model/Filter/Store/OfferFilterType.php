<?php

/**
 * PHP version 7.3
 *
 * @category OfferFilterType
 * @package  RetailCrm\Api\Model\Filter\Store
 */

namespace RetailCrm\Api\Model\Filter\Store;

use DateTime;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class OfferFilterType
 *
 * @category OfferFilterType
 * @package  RetailCrm\Api\Model\Filter\Store
 */
class OfferFilterType
{
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
     * @Form\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("externalIds")
     */
    public $externalIds;

    /**
     * @var string
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("xmlIds")
     */
    public $xmlIds;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("properties")
     */
    public $properties;

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
     * @Form\SerializedName("active")
     */
    public $active;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("sinceId")
     */
    public $sinceId;

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
}
