<?php

/**
 * PHP version 7.3
 *
 * @category OrdersHistoryResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */

namespace RetailCrm\Api\Model\Response\Orders;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class OrdersHistoryResponse
 *
 * @category OrdersHistoryResponse
 * @package  RetailCrm\Api\Model\Response\Orders
 */
class OrdersHistoryResponse extends AbstractPaginatedResponse
{
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("generatedAt")
     */
    public $generatedAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\OrderHistory[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Orders\OrderHistory>")
     * @JMS\SerializedName("history")
     */
    public $history;
}
