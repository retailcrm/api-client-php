<?php

/**
 * PHP version 7.3
 *
 * @category Item
 * @package  RetailCrm\Api\Model\Callback\Response\Payments
 */

namespace RetailCrm\Api\Model\Callback\Response\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Item
 *
 * @category Item
 * @package  RetailCrm\Api\Model\Callback\Response\Payments
 */
class Item
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

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

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("measurementUnit")
     */
    public $measurementUnit;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vat")
     */
    public $vat;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("paymentMethod")
     */
    public $paymentMethod;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("paymentObject")
     */
    public $paymentObject;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("productCode")
     */
    public $productCode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("markingCode")
     */
    public $markingCode;
}
