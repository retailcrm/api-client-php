<?php

/**
 * PHP version 7.3
 *
 * @category ResponseSave
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ResponseSave
 *
 * @category ResponseSave
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty
 */
class ResponseSave
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryId")
     */
    public $deliveryId;

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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var mixed[][]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;
}
