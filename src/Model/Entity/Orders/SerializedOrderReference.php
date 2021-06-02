<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderReference
 * @package  RetailCrm\Api\Model\Entity\Orders
 */

namespace RetailCrm\Api\Model\Entity\Orders;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedOrderReference
 *
 * @category SerializedOrderReference
 * @package  RetailCrm\Api\Model\Entity\Orders
 */
class SerializedOrderReference
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * SerializedOrderReference constructor.
     *
     * @param int $id
     */
    public function __construct(int $id = 0)
    {
        if (0 !== $id) {
            $this->id = $id;
        }
    }
}
