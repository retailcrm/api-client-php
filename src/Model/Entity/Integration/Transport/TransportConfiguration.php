<?php

/**
 * PHP version 7.3
 *
 * @category TransportConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Transport
 */

namespace RetailCrm\Api\Model\Entity\Integration\Transport;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class TransportConfiguration
 *
 * @category TransportConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Transport
 */
class TransportConfiguration
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("token")
     */
    public $token;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isActive")
     */
    public $isActive;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("webhookUrl")
     */
    public $webhookUrl;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("endpointUrl")
     */
    public $endpointUrl;
}
