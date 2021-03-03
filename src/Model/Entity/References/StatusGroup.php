<?php

/**
 * PHP version 7.3
 *
 * @category StatusGroup
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class StatusGroup
 *
 * @category StatusGroup
 * @package  RetailCrm\Api\Model\Entity\References
 */
class StatusGroup
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
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("ordering")
     */
    public $ordering;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("process")
     */
    public $process;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("statuses")
     */
    public $statuses;
}
