<?php

/**
 * PHP version 7.3
 *
 * @category Inventory
 * @package  RetailCrm\Api\Model\Entity\Inventories
 */

namespace RetailCrm\Api\Model\Entity\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Inventory
 *
 * @category Inventory
 * @package  RetailCrm\Api\Model\Entity\Inventories
 */
class Inventory
{
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
     * @JMS\SerializedName("purchasePrice")
     */
    public $purchasePrice;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("store")
     */
    public $store;
}
