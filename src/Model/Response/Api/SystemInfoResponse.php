<?php

/**
 * PHP version 7.3
 *
 * @category SystemInfoResponse
 * @package  RetailCrm\Api\Model\Response\Api
 */

namespace RetailCrm\Api\Model\Response\Api;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class SystemInfoResponse
 *
 * @category SystemInfoResponse
 * @package  RetailCrm\Api\Model\Response\Api
 */
class SystemInfoResponse extends SuccessResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("systemVersion")
     */
    public $systemVersion;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("publicUrl")
     */
    public $publicUrl;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("technicalUrl")
     */
    public $technicalUrl;
}
