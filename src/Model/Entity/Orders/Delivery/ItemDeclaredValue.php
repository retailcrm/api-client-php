<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryData
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Orders\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

class ItemDeclaredValue
{
    /**
     * @var ItemDeclaredValueProduct
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Delivery\ItemDeclaredValueProduct")
     * @JMS\SerializedName("orderProduct")
     */
    public $orderProduct;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("value")
     */
    public $value;
}
