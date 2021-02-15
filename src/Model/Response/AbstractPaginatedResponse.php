<?php

/**
 * PHP version 7.3
 *
 * @category AbstractPaginatedResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use JMS\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Pagination;

/**
 * Class AbstractPaginatedResponse
 *
 * @category AbstractPaginatedResponse
 * @package  RetailCrm\Api\Model\Response
 */
abstract class AbstractPaginatedResponse extends SuccessResponse
{
    /**
     * @var Pagination
     *
     * @JMS\Type("RetailCrm\Api\Model\Pagination")
     * @JMS\SerializedName("pagination")
     */
    public $pagination;
}
