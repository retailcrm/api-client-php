<?php

/**
 * PHP version 7.3
 *
 * @category CostGroupsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CostGroupsResponse
 *
 * @category CostGroupsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class CostGroupsResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\CostGroup[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\CostGroup>")
     * @JMS\SerializedName("costGroups")
     */
    public $costGroups;
}
