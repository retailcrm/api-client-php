<?php

/**
 * PHP version 7.3
 *
 * @category PaymentType
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PaymentType
 *
 * @category PaymentType
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class PaymentType
{
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
}
