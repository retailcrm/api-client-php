<?php

/**
 * PHP version 7.3
 *
 * @category OrdersRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class OrdersRequest
 *
 * @category OrdersRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Orders\OrderFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Orders\OrderFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
