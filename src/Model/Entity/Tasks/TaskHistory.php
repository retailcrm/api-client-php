<?php

/**
 * PHP version 7.3
 *
 * @category TaskHistory
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */

namespace RetailCrm\Api\Model\Entity\Tasks;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class TaskHistory
 *
 * @category TaskHistory
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */
class TaskHistory
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("created")
     */
    public $created;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryUser
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\HistoryUser")
     * @JMS\SerializedName("user")
     */
    public $user;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("field")
     */
    public $field;

    /**
     * @var mixed
     *
     * @JMS\Type("mixed")
     * @JMS\SerializedName("oldValue")
     */
    public $oldValue;

    /**
     * @var mixed
     *
     * @JMS\Type("mixed")
     * @JMS\SerializedName("newValue")
     */
    public $newValue;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryApiKey
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\HistoryApiKey")
     * @JMS\SerializedName("apiKey")
     */
    public $apiKey;

    /**
     * @var \RetailCrm\Api\Model\Entity\Tasks\Task
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Tasks\Task")
     * @JMS\SerializedName("task")
     */
    public $task;

    /**
     * @var \RetailCrm\Api\Model\Entity\Tasks\TaskComment
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Tasks\TaskComment")
     * @JMS\SerializedName("comment")
     */
    public $comment;
}
