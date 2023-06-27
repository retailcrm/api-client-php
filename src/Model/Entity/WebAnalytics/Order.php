<?php

/**
 * PHP version 7.3
 *
 * @category Order
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */

namespace RetailCrm\Api\Model\Entity\WebAnalytics;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Order
 *
 * @category Order
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */
class Order
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
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("number")
     */
    public $number;
}
