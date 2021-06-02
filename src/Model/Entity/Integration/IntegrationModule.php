<?php

/**
 * PHP version 7.3
 *
 * @category IntegrationModule
 * @package  RetailCrm\Api\Model\Entity\Integration
 */

namespace RetailCrm\Api\Model\Entity\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class IntegrationModule
 *
 * @category IntegrationModule
 * @package  RetailCrm\Api\Model\Entity\Integration
 */
class IntegrationModule
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("integrationCode")
     */
    public $integrationCode;

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
     * @JMS\SerializedName("logo")
     */
    public $logo;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("clientId")
     */
    public $clientId;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("native")
     */
    public $native;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("baseUrl")
     */
    public $baseUrl;

    /**
     * @var array<string, string>
     *
     * @JMS\Type("array<string, string>")
     * @JMS\SerializedName("actions")
     */
    public $actions;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("availableCountries")
     */
    public $availableCountries;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("accountUrl")
     */
    public $accountUrl;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Integrations
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Integrations")
     * @JMS\SerializedName("integrations")
     */
    public $integrations;
}
