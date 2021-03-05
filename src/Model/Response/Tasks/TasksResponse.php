<?php

/**
 * PHP version 7.3
 *
 * @category TasksResponse
 * @package  RetailCrm\Api\Model\Response\Tasks
 */

namespace RetailCrm\Api\Model\Response\Tasks;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class TasksResponse
 *
 * @category TasksResponse
 * @package  RetailCrm\Api\Model\Response\Tasks
 */
class TasksResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Tasks\Task[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Tasks\Task>")
     * @JMS\SerializedName("tasks")
     */
    public $tasks;
}
