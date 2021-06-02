<?php

/**
 * PHP version 7.3
 *
 * @category Action
 * @package  RetailCrm\Api\Model\Entity\Integration\Store
 */

namespace RetailCrm\Api\Model\Entity\Integration\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Action
 *
 * @category Action
 * @package  RetailCrm\Api\Model\Entity\Integration\Store
 */
class Action
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("url")
     */
    public $url;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("callPoints")
     */
    public $callPoints;
}
