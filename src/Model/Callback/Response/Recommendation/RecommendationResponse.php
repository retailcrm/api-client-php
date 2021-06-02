<?php

/**
 * PHP version 7.3
 *
 * @category RecommendationResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Recommendation
 */

namespace RetailCrm\Api\Model\Callback\Response\Recommendation;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class RecommendationResponse
 *
 * @category RecommendationResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Recommendation
 */
class RecommendationResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("by")
     */
    public $by;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("ids")
     */
    public $ids;
}
