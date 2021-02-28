<?php

/**
 * PHP version 7.3
 *
 * @category RecommendationConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Recommendation
 */

namespace RetailCrm\Api\Model\Entity\Integration\Recommendation;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class RecommendationConfiguration
 *
 * @category RecommendationConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\Recommendation
 */
class RecommendationConfiguration
{
    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("actions")
     */
    public $actions;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("addDefaultModes")
     */
    public $addDefaultModes;

    /**
     * @var \RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Integration\Recommendation\Mode>")
     * @JMS\SerializedName("modes")
     */
    public $modes;
}
