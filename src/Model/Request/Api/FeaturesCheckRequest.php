<?php

/**
 * PHP version 7.3
 *
 * @category FeaturesCheckRequest
 * @package  RetailCrm\Api\Model\Request\Api
 */

namespace RetailCrm\Api\Model\Request\Api;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class FeaturesCheckRequest
 *
 * @category FeaturesCheckRequest
 * @package  RetailCrm\Api\Model\Request\Api
 */
class FeaturesCheckRequest implements RequestInterface
{
    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("features")
     */
    public $features;
}
