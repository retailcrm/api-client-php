<?php

/**
 * PHP version 7.3
 *
 * @category CustomerPhone
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomerPhone
 *
 * @category CustomerPhone
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class CustomerPhone
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("number")
     */
    public $number;

    /**
     * CustomerPhone constructor.
     *
     * @param string $number
     */
    public function __construct(string $number = '')
    {
        if ('' !== $number) {
            $this->number = $number;
        }
    }
}
