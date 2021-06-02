<?php

/**
 * PHP version 7.3
 *
 * @category ResponseCalculate
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ResponseCalculate
 *
 * @category ResponseCalculate
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty
 */
class ResponseCalculate
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
     * @JMS\SerializedName("group")
     */
    public $group;

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
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("cost")
     */
    public $cost;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("minTerm")
     */
    public $minTerm;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("maxTerm")
     */
    public $maxTerm;

    /**
     * @var mixed[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraData")
     */
    public $extraData;

    /**
     * @var mixed[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("extraDataAvailable")
     */
    public $extraDataAvailable;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal>")
     * @JMS\SerializedName("pickuppointList")
     */
    public $pickuppointList;
}
