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
 * Class VisitsUploadResponse
 *
 * @category VisitsUploadResponse
 * @package  RetailCrm\Api\Model\Response\WebAnalytics
 */
class VisitsUploadResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\WebAnalytics\Visit[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\WebAnalytics\Visit>")
     * @JMS\SerializedName("failedVisits")
     */
    public $failedVisits;
}
