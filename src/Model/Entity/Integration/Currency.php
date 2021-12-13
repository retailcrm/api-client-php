<?php

/**
 * PHP version 7.3
 *
 * @category Currency
 * @package  RetailCrm\Api\Model\Entity\Integration
 */

namespace RetailCrm\Api\Model\Entity\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Currency
 *
 * @category IntegrationModuleEditInfo
 * @package  RetailCrm\Api\Model\Entity\Integration
 */
class Currency
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shortName")
     */
    public $shortName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;
}
