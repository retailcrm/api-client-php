<?php

/**
 * PHP version 7.3
 *
 * @category FeaturesCheckResponse
 * @package  RetailCrm\Api\Model\Response\Api
 */

namespace RetailCrm\Api\Model\Response\Api;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Entity\Settings\Feature;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class FeaturesCheckResponse
 *
 * @category FeaturesCheckResponse
 * @package  RetailCrm\Api\Model\Response\Api
 */
class FeaturesCheckResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Settings\Feature[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Settings\Feature>")
     * @JMS\SerializedName("features")
     */
    public $features;
}
