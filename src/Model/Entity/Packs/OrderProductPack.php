<?php

/**
 * PHP version 7.3
 *
 * @category OrderProductPack
 * @package  RetailCrm\Api\Model\Entity\Packs
 */

namespace RetailCrm\Api\Model\Entity\Packs;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderProductPack
 *
 * @category OrderProductPack
 * @package  RetailCrm\Api\Model\Entity\Packs
 */
class OrderProductPack
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("purchasePrice")
     */
    public $purchasePrice;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

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
     * @JMS\SerializedName("store")
     */
    public $store;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct")
     * @JMS\SerializedName("item")
     */
    public $item;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("itemId")
     */
    public $itemId;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("shipmentDate")
     */
    public $shipmentDate;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoiceNumber")
     */
    public $invoiceNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryNoteNumber")
     */
    public $deliveryNoteNumber;
}
