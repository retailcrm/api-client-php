<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCombineRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCombineRequest
 *
 * @category CustomersCombineRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersCombineRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Enum\Customers\SerializedCustomerReference
     *
     * @Form\Type("RetailCrm\Api\Enum\Customers\SerializedCustomerReference")
     * @Form\SerializedName("resultCustomer")
     */
    public $resultCustomer;

    /**
     * @var \RetailCrm\Api\Enum\Customers\SerializedCustomerReference[]
     *
     * @Form\Type("RetailCrm\Api\Enum\Customers\SerializedCustomerReference[]")
     * @Form\SerializedName("customers")
     */
    public $customers;
}
