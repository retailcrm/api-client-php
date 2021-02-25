<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderReference
 * @package  RetailCrm\Api\Model\Entity\Order
 */

namespace RetailCrm\Api\Model\Entity\Order;

use JMS\Serializer\Annotation as JMS;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class SerializedOrderReference
 *
 * @category SerializedOrderReference
 * @package  RetailCrm\Api\Model\Entity\Order
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
