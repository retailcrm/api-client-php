<?php

/**
 * PHP version 7.3
 *
 * @category EmbedJsConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\EmbedJs
 */

namespace RetailCrm\Api\Model\Entity\Integration\EmbedJs;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class EmbedJsConfiguration
 *
 * @category EmbedJsConfiguration
 * @package  RetailCrm\Api\Model\Entity\Integration\EmbedJs
 */
class EmbedJsConfiguration
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("entrypoint")
     */
    public $entrypoint;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("stylesheet")
     */
    public $stylesheet;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("targets")
     */
    public $targets;
}
