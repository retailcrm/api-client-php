<?php

/**
 * PHP version 7.3
 *
 * @category CustomersUploadRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersUploadRequest
 *
 * @category CustomersUploadRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersUploadRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\Customers\Customer>")
     * @Form\SerializedName("customers")
     * @Form\JsonField()
     */
    public $customers;
}
