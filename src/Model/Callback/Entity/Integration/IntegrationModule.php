<?php

/**
 * PHP version 7.3
 *
 * @category IntegrationModule
 * @package  RetailCrm\Api\Model\Callback\Entity\Integration
 */

namespace RetailCrm\Api\Model\Callback\Entity\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class IntegrationModule
 *
 * @category IntegrationModule
 * @package  RetailCrm\Api\Model\Callback\Entity\Integration
 */
class IntegrationModule
{
    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("freeze")
     */
    public $freeze;
}
