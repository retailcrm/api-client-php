<?php

/**
 * PHP version 7.3
 *
 * @category CustomerSubscriptionFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */

namespace RetailCrm\Api\Model\Filter\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomerSubscriptionFilter
 *
 * @category CustomerSubscriptionFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */
class CustomerSubscriptionFilter
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("channel")
     */
    public $channel;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("subscription")
     */
    public $subscription;

    /**
     * @var bool
     *
     * @Form\Type("bool")
     * @Form\SerializedName("subscribed")
     */
    public $subscribed;
}
