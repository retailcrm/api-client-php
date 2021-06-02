<?php

/**
 * PHP version 7.3
 *
 * @category CostsDeleteResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */

namespace RetailCrm\Api\Model\Response\Costs;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CostsDeleteResponse
 *
 * @category CostsDeleteResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */
class CostsDeleteResponse extends SuccessResponse
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("count")
     */
    public $count;

    /**
     * @var int[]
     *
     * @JMS\Type("array<int>")
     * @JMS\SerializedName("notRemovedIds")
     */
    public $notRemovedIds;
}
