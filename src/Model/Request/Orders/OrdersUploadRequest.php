<?php

/**
 * PHP version 7.3
 *
 * @category OrdersUploadRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class OrdersUploadRequest
 *
 * @category OrdersUploadRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersUploadRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Order[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\Orders\Order>")
     * @Form\SerializedName("orders")
     * @Form\JsonField()
     */
    public $orders;
}
