<?php

/**
 * PHP version 7.3
 *
 * @category CustomersSubscriptionsRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersSubscriptionsRequest
 *
 * @category CustomersSubscriptionsRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersSubscriptionsRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Subscription[]
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Customers\Subscription[]")
     * @Form\SerializedName("subscriptions")
     * @Form\JsonField()
     */
    public $subscriptions;
}
