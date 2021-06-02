<?php

/**
 * PHP version 7.3
 *
 * @category Source
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Source
 *
 * @category Source
 * @package  RetailCrm\Api\Model\Entity
 */
class Source
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("medium")
     */
    public $medium;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("campaign")
     */
    public $campaign;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("keyword")
     */
    public $keyword;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("content")
     */
    public $content;
}
