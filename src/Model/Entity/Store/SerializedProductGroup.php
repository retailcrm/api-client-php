<?php

/**
 * PHP version 7.3
 *
 * @category SerializedProductGroup
 * @package  RetailCrm\Api\Model\Entity\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedProductGroup
 *
 * @category SerializedProductGroup
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class SerializedProductGroup
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("parentId")
     */
    public $parentId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public $description;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("parentExternalId")
     */
    public $parentExternalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;
}
