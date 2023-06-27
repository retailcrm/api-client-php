<?php

/**
 * PHP version 7.3
 *
 * @category Source
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */

namespace RetailCrm\Api\Model\Entity\WebAnalytics;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Source
 *
 * @category Source
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */
class Source
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("medium")
     */
    public $medium;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("campaign")
     */
    public $campaign;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("keyword")
     */
    public $keyword;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("content")
     */
    public $content;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("clientId")
     */
    public $clientId;

    /**
     * @var Order
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\WebAnalytics\Order")
     * @JMS\SerializedName("order")
     */
    public $order;

    /**
     * @var Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\WebAnalytics\Customer")
     * @JMS\SerializedName("customer")
     */
    public $customer;
}
