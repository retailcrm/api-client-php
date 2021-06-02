<?php

/**
 * PHP version 7.3
 *
 * @category IntegrationModulesGetResponse
 * @package  RetailCrm\Api\Model\Response\Integration
 */

namespace RetailCrm\Api\Model\Response\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class IntegrationModulesGetResponse
 *
 * @category IntegrationModulesGetResponse
 * @package  RetailCrm\Api\Model\Response\Integration
 */
class IntegrationModulesGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\IntegrationModule
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\IntegrationModule")
     * @JMS\SerializedName("integrationModule")
     */
    public $integrationModule;
}
