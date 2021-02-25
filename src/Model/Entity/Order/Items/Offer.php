<?php

/**
 * PHP version 7.3
 *
 * @category Offer
 * @package  RetailCrm\Api\Model\Entity\Order\Items
 */

namespace RetailCrm\Api\Model\Entity\Order\Items;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Offer
 *
 * @category Offer
 * @package  RetailCrm\Api\Model\Entity\Order\Items
 */
class Offer
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("displayName")
     */
    public $displayName;

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
     * @JMS\SerializedName("name")
     */
    public $name;

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
     * @JMS\SerializedName("vatRate")
     */
    public $vatRate;

    /**
     * @var \RetailCrm\Api\Model\Entity\Order\Items\Unit
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Order\Items\Unit")
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

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("properties")
     */
    public $properties;
}