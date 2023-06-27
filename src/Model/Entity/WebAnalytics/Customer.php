<?php

/**
 * PHP version 7.3
 *
 * @category Customer
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */

namespace RetailCrm\Api\Model\Entity\WebAnalytics;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Customer
 *
 * @category Customer
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */
class Customer
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
     * @JMS\SerializedName("type")
     */
    public $type;
}
