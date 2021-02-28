<?php

/**
 * PHP version 7.3
 *
 * @category Mode
 * @package  RetailCrm\Api\Model\Entity\Integration\Recommendation
 */

namespace RetailCrm\Api\Model\Entity\Integration\Recommendation;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Mode
 *
 * @category Mode
 * @package  RetailCrm\Api\Model\Entity\Integration\Recommendation
 */
class Mode
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("names")
     */
    public $names;
}
