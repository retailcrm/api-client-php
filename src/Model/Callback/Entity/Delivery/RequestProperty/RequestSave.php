<?php

/**
 * PHP version 7.3
 *
 * @category RequestSave
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class RequestSave
 *
 * @category RequestSave
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */
class RequestSave
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryId")
     */
    public $deliveryId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("order")
     */
    public $order;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("orderNumber")
     */
    public $orderNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("siteName")
     */
    public $siteName;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Store
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\Store")
     * @JMS\SerializedName("store")
     */
    public $store;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("legalEntity")
     */
    public $legalEntity;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\Customer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Manager
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\Manager")
     * @JMS\SerializedName("manager")
     */
    public $manager;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Package[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\Package>")
     * @JMS\SerializedName("packages")
     */
    public $packages;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\SaveDeliveryData
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\SaveDeliveryData")
     * @JMS\SerializedName("delivery")
     */
    public $delivery;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("currency")
     */
    public $currency;
}
