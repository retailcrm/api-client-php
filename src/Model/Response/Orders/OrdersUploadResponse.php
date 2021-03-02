<?php

/**
 * PHP version 7.3
 *
 * @category OrdersUploadResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */

namespace RetailCrm\Api\Model\Response\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class OrdersUploadResponse
 *
 * @category OrdersUploadResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */
class OrdersUploadResponse extends SuccessResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\FixExternalRow[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\FixExternalRow>")
     * @JMS\SerializedName("uploadedOrders")
     */
    public $uploadedOrders;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Order[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Orders\Order>")
     * @JMS\SerializedName("orders")
     */
    public $orders;
}
