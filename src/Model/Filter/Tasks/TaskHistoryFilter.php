<?php

/**
 * PHP version 7.3
 *
 * @category TaskHistoryFilter
 * @package  RetailCrm\Api\Model\Filter\Tasks
 */

namespace RetailCrm\Api\Model\Filter\Tasks;

use DateTime;

/**
 * Class TaskHistoryFilter
 *
 * @category TaskHistoryFilter
 * @package  RetailCrm\Api\Model\Filter\Tasks
 */
class TaskHistoryFilter
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("taskId")
     */
    public $taskId;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("sinceId")
     */
    public $sinceId;

    /**
     * @var DateTime|null
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("startDate")
     */
    public $startDate;

    /**
     * @var DateTime|null
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("endDate")
     */
    public $endDate;
}
