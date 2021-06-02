<?php

/**
 * PHP version 7.3
 *
 * @category PackDataModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Store
 */

namespace RetailCrm\Api\Model\Callback\Entity\Store;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PackDataModel
 *
 * @category PackDataModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Store
 */
class PackDataModel
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Store\PackItemModel
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Store\PackItemModel")
     * @JMS\SerializedName("item")
     */
    public $item;

    /**
     * @var \RetailCrm\Api\Model\Entity\Store\Offer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Store\Offer")
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
