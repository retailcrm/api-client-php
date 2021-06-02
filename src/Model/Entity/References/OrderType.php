<?php

/**
 * PHP version 7.3
 *
 * @category OrderType
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderType
 *
 * @category OrderType
 * @package  RetailCrm\Api\Model\Entity\References
 */
class OrderType
{
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
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("defaultForCrm")
     */
    public $defaultForCrm;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("defaultForApi")
     */
    public $defaultForApi;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ordering")
     */
    public $ordering;
}
