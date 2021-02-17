<?php

/**
 * PHP version 7.3
 *
 * @category CustomersNotesRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomersNotesRequest
 *
 * @category CustomersNotesRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersNotesRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Customers\CustomerNoteFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Customers\CustomerNoteFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
