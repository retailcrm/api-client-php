<?php

/**
 * PHP version 7.3
 *
 * @category Integrations
 * @package  RetailCrm\Api\Model\Entity\Integration
 */

namespace RetailCrm\Api\Model\Entity\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Integrations
 *
 * @category Integrations
 * @package  RetailCrm\Api\Model\Entity\Integration
 */
class Integrations
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Telephony\TelephonyConfiguration
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Telephony\TelephonyConfiguration")
     * @JMS\SerializedName("telephony")
     */
    public $telephony;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryConfiguration")
     * @JMS\SerializedName("delivery")
     */
    public $delivery;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Store\StoreConfiguration
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Store\StoreConfiguration")
     * @JMS\SerializedName("store")
     */
    public $store;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Recommendation\RecommendationConfiguration
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Recommendation\RecommendationConfiguration")
     * @JMS\SerializedName("recommendation")
     */
    public $recommendation;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration")
     * @JMS\SerializedName("payment")
     */
    public $payment;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration")
     * @JMS\SerializedName("mgTransport")
     */
    public $mgTransport;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration")
     * @JMS\SerializedName("mgBot")
     */
    public $mgBot;
}
