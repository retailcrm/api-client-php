<?php

/**
 * PHP version 7.3
 *
 * @category IntegrationModulesEditResponse
 * @package  RetailCrm\Api\Model\Response\Integration
 */

namespace RetailCrm\Api\Model\Response\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class IntegrationModulesEditResponse
 *
 * @category IntegrationModulesEditResponse
 * @package  RetailCrm\Api\Model\Response\Integration
 */
class IntegrationModulesEditResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\IntegrationModuleEditInfo
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\IntegrationModuleEditInfo")
     * @JMS\SerializedName("info")
     *
     */
    public $info;
}
