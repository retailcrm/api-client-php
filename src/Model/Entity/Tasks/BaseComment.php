<?php

/**
 * PHP version 7.3
 *
 * @category BaseComment
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */

namespace RetailCrm\Api\Model\Entity\Tasks;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class BaseComment
 *
 * @category BaseComment
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */
class BaseComment
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
     * @JMS\SerializedName("text")
     */
    public $text;
}
