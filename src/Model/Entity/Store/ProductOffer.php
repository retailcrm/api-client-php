<?php

/**
 * PHP version 7.3
 *
 * @category ProductOffer
 * @package  RetailCrm\Api\Model\Entity\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ProductOffer
 *
 * @category ProductOffer
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class ProductOffer
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price")
     */
    public $price;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("images")
     */
    public $images;

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
     * @JMS\SerializedName("xmlId")
     */
    public $xmlId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("article")
     */
    public $article;

    /**
     * @var \RetailCrm\Api\Model\Entity\Store\OfferPrice[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\OfferPrice>")
     * @JMS\SerializedName("prices")
     */
    public $prices;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("purchasePrice")
     */
    public $purchasePrice;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vatRate")
     */
    public $vatRate;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("properties")
     */
    public $properties;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("weight")
     */
    public $weight;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("length")
     */
    public $length;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("width")
     */
    public $width;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("height")
     */
    public $height;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Items\Unit
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Items\Unit")
     * @JMS\SerializedName("unit")
     */
    public $unit;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("barcode")
     */
    public $barcode;
}
