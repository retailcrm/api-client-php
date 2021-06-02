<?php

/**
 * PHP version 7.3
 *
 * @category CustomersResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomersResponse
 *
 * @category CustomersResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomersResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\Customer>")
     * @JMS\SerializedName("customers")
     */
    public $customers;
}
