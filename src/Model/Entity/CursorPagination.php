<?php

/**
 * PHP version 7.3
 *
 * @category CursorPagination
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CursorPagination
 *
 * @category CursorPagination
 * @package  RetailCrm\Api\Model\Entity
 */
class CursorPagination
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("nextCursor")
     */
    public $nextCursor;
}
