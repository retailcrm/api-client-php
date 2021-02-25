<?php

/**
 * PHP version 7.3
 *
 * @category PackageItem
 * @package  RetailCrm\Api\Model\Entity\Order\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Order\Delivery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PackageItem
 *
 * @category PackageItem
 * @package  RetailCrm\Api\Model\Entity\Order\Delivery
 */
class PackageItem
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct")
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
