<?php

/**
 * PHP version 7.3
 *
 * @category Pagination
 * @package  RetailCrm\Api\Model
 */

namespace RetailCrm\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Pagination
 *
 * @category Pagination
 * @package  RetailCrm\Api\Model
 */
class Pagination
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("limit")
     */
    public $limit;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("totalCount")
     */
    public $totalCount;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("currentPage")
     */
    public $currentPage;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("totalPageCount")
     */
    public $totalPageCount;
}
