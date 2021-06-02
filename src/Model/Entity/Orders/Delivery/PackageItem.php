<?php

/**
 * PHP version 7.3
 *
 * @category PackageItem
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Orders\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PackageItem
 *
 * @category PackageItem
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */
class PackageItem
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItemOrderProduct
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItemOrderProduct")
     * @JMS\SerializedName("orderProduct")
     */
    public $orderProduct;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;
}
