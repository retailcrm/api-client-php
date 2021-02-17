<?php

/**
 * PHP version 7.3
 *
 * @category CustomersEditRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomersEditRequest
 *
 * @category CustomersEditRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersEditRequest extends CustomersCreateRequest
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;
}
