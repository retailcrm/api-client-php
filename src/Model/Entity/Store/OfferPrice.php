<?php

/**
 * PHP version 7.3
 *
 * @category OfferPrice
 * @package  RetailCrm\Api\Model\Entity\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OfferPrice
 *
 * @category OfferPrice
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class OfferPrice
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("priceType")
     */
    public $priceType;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price")
     */
    public $price;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ordering")
     */
    public $ordering;
}
