<?php

/**
 * PHP version 7.3
 *
 * @category SegmentsRequest
 * @package  RetailCrm\Api\Model\Request\Segments
 */

namespace RetailCrm\Api\Model\Request\Segments;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class SegmentsRequest
 *
 * @category SegmentsRequest
 * @package  RetailCrm\Api\Model\Request\Segments
 */
class SegmentsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Segments\SegmentApiFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Segments\SegmentApiFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
