<?php

/**
 * PHP version 7.3
 *
 * @category SerializedCustomerReference
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedCustomerReference
 *
 * @category SerializedCustomerReference
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class SerializedCustomerReference
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * SerializedCustomerReference constructor.
     *
     * @param int $id Customer ID
     */
    public function __construct(int $id = 0)
    {
        $this->id = $id;
    }
}
