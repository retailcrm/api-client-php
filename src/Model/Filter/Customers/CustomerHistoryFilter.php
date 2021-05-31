<?php

/**
 * PHP version 7.3
 *
 * @category CustomerHistoryFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */

namespace RetailCrm\Api\Model\Filter\Customers;

use DateTime;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomerHistoryFilter
 *
 * @category CustomerHistoryFilter
 * @package  RetailCrm\Api\Model\Filter\Customers
 */
class CustomerHistoryFilter
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("customerId")
     */
    public $customerId;

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
     * @Form\SerializedName("customerExternalId")
     */
    public $customerExternalId;

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
