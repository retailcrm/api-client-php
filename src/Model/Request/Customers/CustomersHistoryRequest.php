<?php

/**
 * PHP version 7.3
 *
 * @category CustomersHistoryRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\HistoryPageLimitTrait;

/**
 * Class CustomersHistoryRequest
 *
 * @category CustomersHistoryRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersHistoryRequest implements RequestInterface
{
    use HistoryPageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Customers\CustomerHistoryFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Customers\CustomerHistoryFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
