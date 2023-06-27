<?php

/**
 * PHP version 7.3
 *
 * @category SourcesUploadResponse
 * @package  RetailCrm\Api\Model\Response\WebAnalytics
 */

namespace RetailCrm\Api\Model\Response\WebAnalytics;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class SourcesUploadResponse
 *
 * @category SourcesUploadResponse
 * @package  RetailCrm\Api\Model\Response\WebAnalytics
 */
class SourcesUploadResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\WebAnalytics\Source[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\WebAnalytics\Source>")
     * @JMS\SerializedName("failedSources")
     */
    public $failedSources;
}
