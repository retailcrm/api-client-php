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
 * Class NonWorkingDay
 *
 * @category NonWorkingDay
 * @package  RetailCrm\Api\Model\Entity\Settings
 */
class NonWorkingDay
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("start_date")
     */
    public $startDate;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("end_date")
     */
    public $endDate;

}
