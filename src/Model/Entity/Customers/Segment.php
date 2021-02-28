<?php

/**
 * PHP version 7.3
 *
 * @category Segment
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Segment
 *
 * @category Segment
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class Segment
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isDynamic")
     */
    public $isDynamic;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("customersCount")
     */
    public $customersCount;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;
}
