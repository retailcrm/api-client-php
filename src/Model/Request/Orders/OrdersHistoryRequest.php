<?php

/**
 * PHP version 7.3
 *
 * @category OrdersHistoryRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\HistoryPageLimitTrait;

/**
 * Class OrdersHistoryRequest
 *
 * @category OrdersHistoryRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersHistoryRequest implements RequestInterface
{
    use HistoryPageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Orders\OrderHistoryFilterV4Type
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Orders\OrderHistoryFilterV4Type")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
