<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCreateRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCreateRequest
 *
 * @category CustomersCreateRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Customers\Customer")
     * @Form\SerializedName("customer")
     * @Form\JsonField()
     */
    public $customer;
}
