<?php

/**
 * PHP version 7.3
 *
 * @category Operation
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Operation
 *
 * @category Operation
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class Operation
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\OperationOrder
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\OperationOrder")
     * @JMS\SerializedName("order")
     */
    public $order;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\OperationBonus
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\OperationBonus")
     * @JMS\SerializedName("bonus")
     */
    public $bonus;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\OperationEvent
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\OperationEvent")
     * @JMS\SerializedName("event")
     */
    public $event;
}
