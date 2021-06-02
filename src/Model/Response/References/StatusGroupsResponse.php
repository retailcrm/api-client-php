<?php

/**
 * PHP version 7.3
 *
 * @category StatusGroupsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class StatusGroupsResponse
 *
 * @category StatusGroupsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class StatusGroupsResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\StatusGroup[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\StatusGroup>")
     * @JMS\SerializedName("statusGroups")
     */
    public $statusGroups;
}
