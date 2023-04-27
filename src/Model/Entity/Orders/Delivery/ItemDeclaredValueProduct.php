<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryData
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Orders\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

class ItemDeclaredValueProduct
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;
}
