<?php

/**
 * PHP version 7.3
 *
 * @category CostsResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */

namespace RetailCrm\Api\Model\Response\Costs;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CostsResponse
 *
 * @category CostsResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */
class CostsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Costs\Cost[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Costs\Cost>")
     * @JMS\SerializedName("costs")
     */
    public $costs;
}
