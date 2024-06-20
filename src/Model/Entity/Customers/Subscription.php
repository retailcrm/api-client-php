<?php

/**
 * PHP version 7.3
 *
 * @category Subscription
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Subscription
 *
 * @category Subscription
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class Subscription
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("channel")
     */
    public $channel;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("unsubscribeMessageId")
     */
    public $unsubscribeMessageId;
}
