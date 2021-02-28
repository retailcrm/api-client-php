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
     * @var \RetailCrm\Api\Model\Entity\Integration\Integrations
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Integrations")
     * @JMS\SerializedName("info")
     *
     * @todo This field is not documented properly. Ask for better documentation & update DTO accordingly.
     */
    public $info;
}
