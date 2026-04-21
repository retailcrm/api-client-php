<?php

/**
 * PHP version 7.3
 *
 * @category EmbedJsTranslation
 * @package  RetailCrm\Api\Model\Entity\Integration\EmbedJs
 */

namespace RetailCrm\Api\Model\Entity\Integration\EmbedJs;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class EmbedJsTranslation
 *
 * @category EmbedJsTranslation
 * @package  RetailCrm\Api\Model\Entity\Integration\EmbedJs
 */
class EmbedJsTranslation
{
    /**
     * @var string|null
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("en")
     */
    public $en;

    /**
     * @var string|null
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("es")
     */
    public $es;

    /**
     * @var string|null
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ru")
     */
    public $ru;
}
