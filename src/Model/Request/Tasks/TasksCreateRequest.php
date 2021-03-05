<?php

/**
 * PHP version 7.3
 *
 * @category TasksCreateRequest
 * @package  RetailCrm\Api\Model\Request\Tasks
 */

namespace RetailCrm\Api\Model\Request\Tasks;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class TasksCreateRequest
 *
 * @category TasksCreateRequest
 * @package  RetailCrm\Api\Model\Request\Tasks
 */
class TasksCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Tasks\Task
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Tasks\Task")
     * @Form\SerializedName("task")
     * @Form\JsonField()
     */
    public $task;
}
