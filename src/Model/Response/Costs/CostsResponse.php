<?php

/**
 * PHP version 7.3
 *
 * @category CostsResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */

namespace RetailCrm\Api\Model\Response\Costs;

use JMS\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Pagination;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CostsResponse
 *
 * @category CostsResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */
class CostsResponse extends SuccessResponse
{
    /**
     * @var Pagination
     *
     * @JMS\Type("RetailCrm\Api\Model\Pagination")
     * @JMS\SerializedName("pagination")
     */
    public $pagination;

    /**
     * @var \RetailCrm\Api\Model\Entity\Costs\Cost[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Costs\Cost>")
     * @JMS\SerializedName("costs")
     */
    public $costs;
}
