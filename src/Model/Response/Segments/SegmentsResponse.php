<?php

/**
 * PHP version 7.3
 *
 * @category SegmentsResponse
 * @package  RetailCrm\Api\Model\Response\Segments
 */

namespace RetailCrm\Api\Model\Response\Segments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class SegmentsResponse
 *
 * @category SegmentsResponse
 * @package  RetailCrm\Api\Model\Response\Segments
 */
class SegmentsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\Segment[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Customers\Segment>")
     * @JMS\SerializedName("segments")
     */
    public $segments;
}
