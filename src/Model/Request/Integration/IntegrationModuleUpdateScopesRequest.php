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
use RetailCrm\Api\Model\Entity\Integration\Requires;

class IntegrationModuleUpdateScopesRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Requires
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Integration\Requires")
     * @Form\SerializedName("requires")
     * @Form\JsonField()
     */
    public $requires;

    /**
     * IntegrationModuleUpdateScopesRequest constructor.
     */
    public function __construct(Requires $requires)
    {
        $this->requires = $requires;
    }
}
