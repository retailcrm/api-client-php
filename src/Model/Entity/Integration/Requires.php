<?php

/**
 * PHP version 7.3
 *
 * @category Requires
 * @package  RetailCrm\Api\Model\Entity\Integration
 */

namespace RetailCrm\Api\Model\Entity\Integration;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Requires
 *
 * @category Requires
 * @package  RetailCrm\Api\Model\Entity\Integration
 */
class Requires
{
    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("scopes")
     */
    public $scopes;
}
