<?php

/**
 * PHP version 7.3
 *
 * @category OrdersStatusesRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class OrdersStatusesRequest
 *
 * @category OrdersStatusesRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersStatusesRequest implements RequestInterface
{
    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("externalIds")
     */
    public $externalIds;
}
