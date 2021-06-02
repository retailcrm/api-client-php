<?php

/**
 * PHP version 7.3
 *
 * @category Terminal
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Terminal
 *
 * @category Terminal
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class Terminal
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

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
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("schedule")
     */
    public $schedule;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * @var mixed[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates")
     * @JMS\SerializedName("coordinates")
     */
    public $coordinates;
}
