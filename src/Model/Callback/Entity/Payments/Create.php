<?php

/**
 * PHP 7.3
 *
 * @category Create
 * @package  RetailCrm\Api\Model\Callback\Entity\Payments
 */

namespace RetailCrm\Api\Model\Callback\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Create
 *
 * @category Create
 * @package  RetailCrm\Api\Model\Callback\Entity\Payments
 */
class Create
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shopId")
     */
    public $shopId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoiceUuid")
     */
    public $invoiceUuid;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoiceType")
     */
    public $invoiceType;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("currency")
     */
    public $currency;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("orderNumber")
     */
    public $orderNumber;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("orderId")
     */
    public $orderId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("siteUrl")
     */
    public $siteUrl;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("returnUrl")
     */
    public $returnUrl;

    /**
     * @var \RetailCrm\Api\Model\Callback\Response\Payments\Item[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Response\Payments\Item>")
     * @JMS\SerializedName("items")
     */
    public $items;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\Customer")
     * @JMS\SerializedName("customer")
     */
    public $customer;
}
