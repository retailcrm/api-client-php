<?php

/**
 * PHP version 7.3
 *
 * @category CustomerSubscription
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomerSubscription
 *
 * @category CustomerSubscription
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class CustomerSubscription
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\SubscriptionCategory
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\SubscriptionCategory")
     * @JMS\SerializedName("subscription")
     */
    public $subscription;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("subscribed")
     */
    public $subscribed;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("changedAt")
     */
    public $changedAt;
}
