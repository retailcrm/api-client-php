<?php

/**
 * PHP version 7.3
 *
 * @category SubscriptionsEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Customers\SubscriptionCategory;

/**
 * Class SubscriptionsEditRequest
 *
 * @category SubscriptionsEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class SubscriptionsEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\SubscriptionCategory
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Customers\SubscriptionCategory")
     * @Form\SerializedName("subscription")
     * @Form\JsonField()
     */
    public $subscription;

    /**
     * SubscriptionsEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Customers\SubscriptionCategory|null $subscription
     */
    public function __construct(?SubscriptionCategory $subscription = null)
    {
        if (null !== $subscription) {
            $this->subscription = $subscription;
        }
    }
}
