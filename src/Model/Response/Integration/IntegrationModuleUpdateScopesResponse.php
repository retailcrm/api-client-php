<?php

/**
 * PHP version 7.3
 *
 * @category IntegrationModuleUpdateScopesResponse
 * @package  RetailCrm\Api\Model\Response\Integration
 */

namespace RetailCrm\Api\Model\Response\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class IntegrationModuleUpdateScopesResponse
 *
 * @category IntegrationModuleUpdateScopesResponse
 * @package  RetailCrm\Api\Model\Response\Integration
 */
class IntegrationModuleUpdateScopesResponse extends SuccessResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("apiKey")
     */
    public $apiKey;
}
