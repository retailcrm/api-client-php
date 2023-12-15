<?php

/**
 * PHP version 7.3
 *
 * @category Feature
 * @package  RetailCrm\Api\Model\Entity\Settings
 */

namespace RetailCrm\Api\Model\Entity\Settings;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Feature
 *
 * @category Feature
 * @package  RetailCrm\Api\Model\Entity\Settings
 */
class Feature
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("available")
     */
    public $available;
}
