<?php

/**
 * PHP version 7.3
 *
 * @category OrderHistoryFilterV4Type
 * @package  RetailCrm\Api\Model\Filter\Orders
 */

namespace RetailCrm\Api\Model\Filter\Orders;

use DateTime;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class OrderHistoryFilterV4Type
 *
 * @category OrderHistoryFilterV4Type
 * @package  RetailCrm\Api\Model\Filter\Orders
 */
class OrderHistoryFilterV4Type
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("orderId")
     */
    public $orderId;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("sinceId")
     */
    public $sinceId;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("orderExternalId")
     */
    public $orderExternalId;

    /**
     * @var DateTime|null
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("startDate")
     */
    public $startDate;

    /**
     * @var DateTime|null
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("endDate")
     */
    public $endDate;
}
