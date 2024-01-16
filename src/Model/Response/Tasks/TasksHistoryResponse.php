<?php

/**
 * PHP version 7.3
 *
 * @category TasksHistoryResponse
 * @package  RetailCrm\Api\Model\Response\Tasks
 */

namespace RetailCrm\Api\Model\Response\Tasks;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

class TasksHistoryResponse extends AbstractPaginatedResponse
{
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("generatedAt")
     */
    public $generatedAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\Tasks\TaskHistory[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Tasks\TaskHistory>")
     * @JMS\SerializedName("history")
     */
    public $history;
}
