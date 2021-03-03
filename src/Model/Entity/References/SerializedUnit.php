<?php

/**
 * PHP version 7.3
 *
 * @category SerializedUnit
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedUnit
 *
 * @category SerializedUnit
 * @package  RetailCrm\Api\Model\Entity\References
 */
class SerializedUnit
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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sym")
     */
    public $sym;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("default")
     */
    public $default;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;
}
