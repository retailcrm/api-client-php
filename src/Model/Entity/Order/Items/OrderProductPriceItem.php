<?php

/**
 * PHP version 7.3
 *
 * @category OrderProductPriceItem
 * @package  RetailCrm\Api\Model\Entity\Order\Items
 */

namespace RetailCrm\Api\Model\Entity\Order\Items;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderProductPriceItem
 *
 * @category OrderProductPriceItem
 * @package  RetailCrm\Api\Model\Entity\Order\Items
 */
class OrderProductPriceItem
{
    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price")
     */
    public $price;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;
}
