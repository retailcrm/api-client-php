<?php

/**
 * PHP version 7.3
 *
 * @category CustomersEditResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\IdResponse;

/**
 * Class CustomersEditResponse
 *
 * @category CustomersEditResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomersEditResponse extends IdResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("state")
     */
    public $state;
}
