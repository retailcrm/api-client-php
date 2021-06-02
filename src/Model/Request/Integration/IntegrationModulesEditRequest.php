<?php

/**
 * PHP version 7.3
 *
 * @category IntegrationModulesEditRequest
 * @package  RetailCrm\Api\Model\Request\Integration
 */

namespace RetailCrm\Api\Model\Request\Integration;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Integration\IntegrationModule;

/**
 * Class IntegrationModulesEditRequest
 *
 * @category IntegrationModulesEditRequest
 * @package  RetailCrm\Api\Model\Request\Integration
 */
class IntegrationModulesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\IntegrationModule
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Integration\IntegrationModule")
     * @Form\SerializedName("integrationModule")
     * @Form\JsonField()
     */
    public $integrationModule;

    /**
     * IntegrationModulesEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Integration\IntegrationModule $integrationModule
     */
    public function __construct(IntegrationModule $integrationModule)
    {
        $this->integrationModule = $integrationModule;
    }
}
