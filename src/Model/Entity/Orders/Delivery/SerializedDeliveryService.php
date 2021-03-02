<?php

/**
 * PHP version 7.3
 *
 * @category SerializedDeliveryService
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Orders\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedDeliveryService
 *
 * @category SerializedDeliveryService
 * @package  RetailCrm\Api\Model\Entity\Orders\Delivery
 */
class SerializedDeliveryService
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;
}
