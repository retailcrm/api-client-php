<?php

/**
 * PHP version 7.3
 *
 * @category AbstractCursorPaginatedResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class AbstractCursorPaginatedResponse
 *
 * @category AbstractCursorPaginatedResponse
 * @package  RetailCrm\Api\Model\Response
 */
class AbstractCursorPaginatedResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CursorPagination
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CursorPagination")
     * @JMS\SerializedName("pagination")
     */
    public $pagination;
}
