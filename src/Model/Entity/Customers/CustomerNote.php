<?php

/**
 * PHP version 7.3
 *
 * @category CustomerNote
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomerNote
 *
 * @category CustomerNote
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class CustomerNote
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Customers\Customer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("managerId")
     */
    public $managerId;

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
     * @JMS\SerializedName("text")
     */
    public $text;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;
}
