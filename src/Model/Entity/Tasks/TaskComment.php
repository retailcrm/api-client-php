<?php

/**
 * PHP version 7.3
 *
 * @category TaskComment
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */

namespace RetailCrm\Api\Model\Entity\Tasks;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class TaskComment
 *
 * @category TaskComment
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */
class TaskComment extends AbstractComment
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("creator")
     */
    public $creator;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("updatedAt")
     */
    public $updatedAt;
}
