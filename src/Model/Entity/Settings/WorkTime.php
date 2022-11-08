<?php

/**
 * PHP version 7.3
 *
 * @category Value
 * @package  RetailCrm\Api\Model\Entity\Settings
 */

namespace RetailCrm\Api\Model\Entity\Settings;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class WorkTime
 *
 * @category WorkTime
 * @package  RetailCrm\Api\Model\Entity\Settings
 */
class WorkTime
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("day_type")
     */
    public $dayType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("start_time")
     */
    public $startTime;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("end_time")
     */
    public $endTime;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lunch_start_time")
     */
    public $lunchStartTime;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lunch_end_time")
     */
    public $lunchEndTime;
}
