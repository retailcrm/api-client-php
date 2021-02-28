<?php

/**
 * PHP version 7.3
 *
 * @category RequestStatusUpdateItem
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class RequestStatusUpdateItem
 *
 * @category RequestStatusUpdateItem
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */
class RequestStatusUpdateItem
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryId")
     */
    public $deliveryId;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\StatusInfo[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Delivery\StatusInfo>")
     * @JMS\SerializedName("history")
     */
    public $history;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("trackNumber")
     */
    public $trackNumber;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cost")
     */
    public $cost;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string, string>")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;
}
