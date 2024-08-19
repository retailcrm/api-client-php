<?php

/**
 * PHP version 7.3
 *
 * @category StoreOffer
 * @package  RetailCrm\Api\Model\Entity\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class StoreOffer
 *
 * @category StoreOffer
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class StoreOffer extends ProductOffer
{
    /**
     * @JMS\Exclude()
     */
    public $price;

    /**
     * @var \RetailCrm\Api\Model\Entity\Store\Product
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Store\Product")
     * @JMS\SerializedName("product")
     */
    public $product;
}
