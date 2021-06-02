<?php

/**
 * PHP version 7.3
 *
 * @category CustomersGetResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomersGetResponse
 *
 * @category CustomersGetResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomersGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\Customer")
     * @JMS\SerializedName("customer")
     */
    public $customer;
}
