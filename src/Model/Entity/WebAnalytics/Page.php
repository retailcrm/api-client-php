<?php

/**
 * @category Page
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */

namespace RetailCrm\Api\Model\Entity\WebAnalytics;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Page
 *
 * @category Page
 * @package  RetailCrm\Api\Model\Entity\WebAnalytics
 */
class Page
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("url")
     */
    public $url;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("title")
     */
    public $title;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("countViews")
     */
    public $countViews;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("timeOnPage")
     */
    public $timeOnPage;
}
