<?php

/**
 * PHP version 7.3
 *
 * @category Pagination
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Pagination
 *
 * @category Pagination
 * @package  RetailCrm\Api\Model\Entity
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
