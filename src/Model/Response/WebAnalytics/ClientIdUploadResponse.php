<?php

/**
 * PHP version 7.3
 *
 * @category ClientIdUploadResponse
 * @package  RetailCrm\Api\Model\Response\WebAnalytics
 */

namespace RetailCrm\Api\Model\Response\WebAnalytics;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class ClientIdUploadResponse
 *
 * @category ClientIdUploadResponse
 * @package  RetailCrm\Api\Model\Response\WebAnalytics
 */
class ClientIdUploadResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\WebAnalytics\ClientId[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\WebAnalytics\ClientId>")
     * @JMS\SerializedName("failedClientIds")
     */
    public $failedClientIds;
}
