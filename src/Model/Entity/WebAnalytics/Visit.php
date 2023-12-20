<?php

/**
 * @category Visit
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */

namespace RetailCrm\Api\Model\Entity\WebAnalytics;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Visit
 *
 * @category Visit
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */
class Visit
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("visitLength")
     */
    public $visitLength;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("exitPage")
     */
    public $exitPage;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("landingPage")
     */
    public $landingPage;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("pageViews")
     */
    public $pageViews;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("pageDepth")
     */
    public $pageDepth;

    /**
     * @var Customer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\WebAnalytics\Customer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var Source
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var Page[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\WebAnalytics\Page>")
     * @JMS\SerializedName("pages")
     */
    public $pages;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("clientId")
     */
    public $clientId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;
}
