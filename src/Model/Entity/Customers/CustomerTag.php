<?php

/**
 * PHP version 7.3
 *
 * @category CustomerTag
 * @package  RetailCrm\Api\Model\Entity\Customers
 */

namespace RetailCrm\Api\Model\Entity\Customers;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomerTag
 *
 * @category CustomerTag
 * @package  RetailCrm\Api\Model\Entity\Customers
 */
class CustomerTag
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string $color Won't be used for create / edit.
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("color")
     */
    public $color;

    /**
     * @var bool $attached Won't be used for create / edit.
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("attached")
     */
    public $attached;

    /**
     * CustomerTag constructor.
     *
     * @param string $name
     */
    public function __construct(string $name = '')
    {
        if ('' !== $name) {
            $this->name = $name;
        }
    }
}
