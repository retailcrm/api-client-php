<?php

/**
 * PHP version 7.3
 *
 * @category MgChannelsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class MgChannelsResponse
 *
 * @category MgChannelsResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class MgChannelsResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\MGChannel[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\MGChannel>")
     * @JMS\SerializedName("mgChannels")
     */
    public $mgChannels;
}
