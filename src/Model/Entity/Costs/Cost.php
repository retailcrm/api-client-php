<?php

/**
 * PHP version 7.3
 *
 * @category Cost
 * @package  RetailCrm\Api\Model\Entity\Costs
 */

namespace RetailCrm\Api\Model\Entity\Costs;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Cost
 *
 * @category Cost
 * @package  RetailCrm\Api\Model\Entity\Costs
 */
class Cost
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Source
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Source")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("dateFrom")
     */
    public $dateFrom;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("dateTo")
     */
    public $dateTo;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("summ")
     */
    public $summ;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("costItem")
     */
    public $costItem;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("createdBy")
     */
    public $createdBy;

    /**
     * @var \RetailCrm\Api\Model\Entity\Costs\CostOrder
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Costs\CostOrder")
     * @JMS\SerializedName("order")
     */
    public $order;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("userId")
     */
    public $userId;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("sites")
     */
    public $sites;
}
