<?php

/**
 * PHP version 7.3
 *
 * @category OrdersPaymentsEditRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class OrdersPaymentsEditRequest
 *
 * @category OrdersPaymentsEditRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersPaymentsEditRequest extends OrdersPaymentsCreateRequest
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;
}
