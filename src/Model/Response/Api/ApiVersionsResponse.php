<?php

/**
 * PHP version 7.3
 *
 * @category ApiVersionsResponse
 * @package  RetailCrm\Api\Model\Response\Api
 */

namespace RetailCrm\Api\Model\Response\Api;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class ApiVersionsResponse
 *
 * @category ApiVersionsResponse
 * @package  RetailCrm\Api\Model\Response\Api
 */
class ApiVersionsResponse extends SuccessResponse
{
    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("versions")
     */
    public $versions;
}
