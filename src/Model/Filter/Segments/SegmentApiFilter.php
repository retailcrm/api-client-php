<?php

/**
 * PHP version 7.3
 *
 * @category SegmentApiFilter
 * @package  RetailCrm\Api\Model\Filter\Segments
 */

namespace RetailCrm\Api\Model\Filter\Segments;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class SegmentApiFilter
 *
 * @category SegmentApiFilter
 * @package  RetailCrm\Api\Model\Filter\Segments
 */
class SegmentApiFilter
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("type")
     */
    public $type;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("active")
     */
    public $active;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("minCustomersCount")
     */
    public $minCustomersCount;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("maxCustomersCount")
     */
    public $maxCustomersCount;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("dateFrom")
     */
    public $dateFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("dateTo")
     */
    public $dateTo;
}
