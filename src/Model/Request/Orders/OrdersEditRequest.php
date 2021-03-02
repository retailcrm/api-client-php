<?php

/**
 * PHP version 7.3
 *
 * @category OrdersEditRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class OrdersEditRequest
 *
 * @category OrdersEditRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersEditRequest extends OrdersCreateRequest
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;
}
