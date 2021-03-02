<?php

/**
 * PHP version 7.3
 *
 * @category OrdersCreateRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class OrdersCreateRequest
 *
 * @category OrdersCreateRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Order
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Orders\Order")
     * @Form\SerializedName("order")
     * @Form\JsonField()
     */
    public $order;
}
