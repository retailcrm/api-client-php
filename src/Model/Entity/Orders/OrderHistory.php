<?php

/**
 * PHP version 7.3
 *
 * @category OrderHistory
 * @package  RetailCrm\Api\Model\Entity\Orders
 */

namespace RetailCrm\Api\Model\Entity\Orders;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderHistory
 *
 * @category OrderHistory
 * @package  RetailCrm\Api\Model\Entity\Orders
 */
class OrderHistory
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("created")
     */
    public $created;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("deleted")
     */
    public $deleted;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryUser
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\HistoryUser")
     * @JMS\SerializedName("user")
     */
    public $user;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("field")
     */
    public $field;

    /**
     * @var mixed
     *
     * @JMS\Type("mixed")
     * @JMS\SerializedName("oldValue")
     */
    public $oldValue;

    /**
     * @var mixed
     *
     * @JMS\Type("mixed")
     * @JMS\SerializedName("newValue")
     */
    public $newValue;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryApiKey
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\HistoryApiKey")
     * @JMS\SerializedName("apiKey")
     */
    public $apiKey;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Order
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Order")
     * @JMS\SerializedName("order")
     */
    public $order;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Order
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Order")
     * @JMS\SerializedName("ancestor")
     */
    public $ancestor;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct")
     * @JMS\SerializedName("item")
     */
    public $item;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Payment
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Payment")
     * @JMS\SerializedName("payment")
     */
    public $payment;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Order
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Order")
     * @JMS\SerializedName("combinedTo")
     */
    public $combinedTo;
}
