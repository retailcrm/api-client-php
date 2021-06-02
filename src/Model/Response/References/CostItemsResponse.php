<?php

/**
 * PHP version 7.3
 *
 * @category CostItemsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CostItemsResponse
 *
 * @category CostItemsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class CostItemsResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\CostItem[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\CostItem>")
     * @JMS\SerializedName("costItems")
     */
    public $costItems;
}
