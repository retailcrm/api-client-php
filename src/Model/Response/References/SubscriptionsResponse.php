<?php

/**
 * PHP version 7.3
 *
 * @category SubscriptionsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class SubscriptionsResponse
 *
 * @category SubscriptionsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class SubscriptionsResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\SubscriptionCategory[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\SubscriptionCategory>")
     * @JMS\SerializedName("subscriptions")
     */
    public $subscriptions;
}
