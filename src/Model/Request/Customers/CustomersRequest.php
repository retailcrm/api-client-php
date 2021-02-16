<?php

/**
 * PHP version 7.3
 *
 * @category CustomersRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomersRequest
 *
 * @category CustomersRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Customers\CustomerFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Customers\CustomerFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
