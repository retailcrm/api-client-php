<?php

/**
 * PHP version 7.3
 *
 * @category Cart
 * @package  RetailCrm\Api\Model\Entity\CustomerInteraction
 */

namespace RetailCrm\Api\Model\Entity\CustomerInteraction;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Cart
 *
 * @category Cart
 * @package  RetailCrm\Api\Model\Entity\CustomerInteraction
 */
class Cart
{
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
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:sP'>")
     * @JMS\SerializedName("droppedAt")
     */
    public $droppedAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:sP'>")
     * @JMS\SerializedName("clearedAt")
     */
    public $clearedAt;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("link")
     */
    public $link;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomerInteraction\CartCustomer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomerInteraction\CartCustomer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomerInteraction\CartItem[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomerInteraction\CartItem>")
     * @JMS\SerializedName("items")
     */
    public $items;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomerInteraction\CartOrder
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomerInteraction\CartOrder")
     * @JMS\SerializedName("order")
     */
    public $order;
}
