<?php

/**
 * PHP version 7.3
 *
 * @category OrdersFixExternalIdsRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class OrdersFixExternalIdsRequest
 *
 * @category OrdersFixExternalIdsRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersFixExternalIdsRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\FixExternalRow[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\FixExternalRow>")
     * @Form\SerializedName("orders")
     * @Form\JsonField()
     */
    public $orders;

    /**
     * OrdersFixExternalIdsRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\FixExternalRow[] $orders
     */
    public function __construct(array $orders = [])
    {
        $this->orders = $orders;
    }
}
