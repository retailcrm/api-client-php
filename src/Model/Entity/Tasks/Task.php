<?php

/**
 * PHP version 7.3
 *
 * @category Task
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */

namespace RetailCrm\Api\Model\Entity\Tasks;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Task
 *
 * @category Task
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */
class Task
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("text")
     */
    public $text;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("commentary")
     */
    public $commentary;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i'>")
     * @JMS\SerializedName("datetime")
     */
    public $datetime;

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
     * @JMS\SerializedName("complete")
     */
    public $complete;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("creator")
     */
    public $creator;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("performer")
     */
    public $performer;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("performerId")
     */
    public $performerId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("performerType")
     */
    public $performerType;

    /**
     * @var \RetailCrm\Api\Model\Entity\Tasks\AbstractCustomer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Tasks\AbstractCustomer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Tasks\Order
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Tasks\Order")
     * @JMS\SerializedName("order")
     */
    public $order;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phoneSite")
     */
    public $phoneSite;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("completedAt")
     */
    public $completedAt;
}
