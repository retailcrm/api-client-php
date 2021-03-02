<?php

/**
 * PHP version 7.3
 *
 * @category OrderProductPackFilter
 * @package  RetailCrm\Api\Model\Filter\Packs
 */

namespace RetailCrm\Api\Model\Filter\Packs;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class OrderProductPackFilter
 *
 * @category OrderProductPackFilter
 * @package  RetailCrm\Api\Model\Filter\Packs
 */
class OrderProductPackFilter
{
    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("stores")
     */
    public $stores;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("itemId")
     */
    public $itemId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("offerXmlId")
     */
    public $offerXmlId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("offerExternalId")
     */
    public $offerExternalId;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("orderId")
     */
    public $orderId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("orderExternalId")
     */
    public $orderExternalId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("shipmentDateFrom")
     */
    public $shipmentDateFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("shipmentDateTo")
     */
    public $shipmentDateTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("invoiceNumber")
     */
    public $invoiceNumber;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("deliveryNoteNumber")
     */
    public $deliveryNoteNumber;
}
