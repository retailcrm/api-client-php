<?php

/**
 * PHP version 7.3
 *
 * @category TasksGetResponse
 * @package  RetailCrm\Api\Model\Response\Tasks
 */

namespace RetailCrm\Api\Model\Response\Tasks;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class TasksGetResponse
 *
 * @category TasksGetResponse
 * @package  RetailCrm\Api\Model\Response\Tasks
 */
class TasksGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Tasks\Task
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Tasks\Task")
     * @JMS\SerializedName("task")
     */
    public $task;
}
