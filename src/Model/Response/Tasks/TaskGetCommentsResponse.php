<?php

/**
 * PHP version 7.3
 *
 * @category TaskGetCommentsResponse
 * @package  RetailCrm\Api\Model\Response\Tasks
 */

namespace RetailCrm\Api\Model\Response\Tasks;

use RetailCrm\Api\Model\Entity\Tasks\TaskComment;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class TaskGetCommentsResponse
 *
 * @category TaskGetCommentsRequest
 * @package  RetailCrm\Api\Model\Response\Tasks
 */
class TaskGetCommentsResponse extends AbstractPaginatedResponse
{
    /**
     * @var TaskComment[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Tasks\TaskComment>")
     * @JMS\SerializedName("comments")
     */
    public $comments;
}
