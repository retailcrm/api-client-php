<?php

/**
 * PHP version 7.3
 *
 * @category ClientId
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */

namespace RetailCrm\Api\Model\Entity\WebAnalytics;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ClientId
 *
 * @category ClientId
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */
class ClientId
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("value")
     */
    public $value;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var Order
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\WebAnalytics\Order")
     * @JMS\SerializedName("order")
     */
    public $order;

    /**
     * @var Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\WebAnalytics\Customer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;
}
