<?php

/**
 * PHP version 7.3
 *
 * @category AbstractPaginatedResponse
 * @package  RetailCrm\Api\Model\Response
 */

namespace RetailCrm\Api\Model\Response;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Entity\Pagination;

/**
 * Class AbstractPaginatedResponse
 *
 * @category AbstractPaginatedResponse
 * @package  RetailCrm\Api\Model\Response
 *
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 */
abstract class AbstractPaginatedResponse extends SuccessResponse
{
    /**
     * @var Pagination
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Pagination")
     * @JMS\SerializedName("pagination")
     */
    public $pagination;
}
