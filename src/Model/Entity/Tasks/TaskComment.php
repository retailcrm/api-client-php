<?php

/**
 * PHP version 7.3
 *
 * @category TaskComment
 * @package  RetailCrm\Api\Model\Entity\T
 */

namespace RetailCrm\Api\Model\Entity\Tasks;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

class TaskComment
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;
}
