<?php

/**
 * PHP version 7.3
 *
 * @category Product
 * @package  RetailCrm\Api\Model\Entity\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Product
 *
 * @category Product
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class Product
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("minPrice")
     */
    public $minPrice;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("maxPrice")
     */
    public $maxPrice;

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
     * @JMS\SerializedName("article")
     */
    public $article;

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
     * @JMS\SerializedName("imageUrl")
     */
    public $imageUrl;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("popular")
     */
    public $popular;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("stock")
     */
    public $stock;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("novelty")
     */
    public $novelty;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("recommended")
     */
    public $recommended;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("properties")
     */
    public $properties;

    /**
     * @var \RetailCrm\Api\Model\Entity\FixExternalRow[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\FixExternalRow>")
     * @JMS\SerializedName("groups")
     */
    public $groups;

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
     * @JMS\SerializedName("manufacturer")
     */
    public $manufacturer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Store\ProductOffer[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\ProductOffer>")
     * @JMS\SerializedName("offers")
     */
    public $offers;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("markable")
     */
    public $markable;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("updatedAt")
     */
    public $updatedAt;
}
