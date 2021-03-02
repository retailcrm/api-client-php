<?php

/**
 * PHP version 7.3
 *
 * @category OrderProductPackHistoryFilterType
 * @package  RetailCrm\Api\Model\Filter\Packs
 */

namespace RetailCrm\Api\Model\Filter\Packs;

use DateTime;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class OrderProductPackHistoryFilterType
 *
 * @category OrderProductPackHistoryFilterType
 * @package  RetailCrm\Api\Model\Filter\Packs
 */
class OrderProductPackHistoryFilterType
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
     * @var DateTime
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("startDate")
     */
    public $startDate;

    /**
     * @var DateTime
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("endDate")
     */
    public $endDate;
}
