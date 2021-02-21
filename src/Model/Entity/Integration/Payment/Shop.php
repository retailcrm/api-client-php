<?php

/**
 * PHP version 7.3
 *
 * @category Shop
 * @package  RetailCrm\Api\Model\Entity\Integration\Payment
 */

namespace RetailCrm\Api\Model\Entity\Integration\Payment;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Shop
 *
 * @category Shop
 * @package  RetailCrm\Api\Model\Entity\Integration\Payment
 */
class Shop
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

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;
}
