<?php

/**
 * PHP version 7.3
 *
 * @category PackDataModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Inventories
 */

namespace RetailCrm\Api\Model\Callback\Entity\Inventories;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PackDataModel
 *
 * @category PackDataModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Inventories
 */
class PackDataModel
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Inventories\PackItemModel
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Inventories\PackItemModel")
     * @JMS\SerializedName("item")
     */
    public $item;

    /**
     * @var \RetailCrm\Api\Model\Entity\Inventories\Offer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Inventories\Offer")
     * @JMS\SerializedName("offer")
     */
    public $offer;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("store")
     */
    public $store;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("purchasePrice")
     */
    public $purchasePrice;

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
