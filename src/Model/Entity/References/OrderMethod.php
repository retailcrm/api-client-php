<?php

/**
 * PHP version 7.3
 *
 * @category OrderMethod
 * @package  RetailCrm\Api\Model\Entity\References
 */

namespace RetailCrm\Api\Model\Entity\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderMethod
 *
 * @category OrderMethod
 * @package  RetailCrm\Api\Model\Entity\References
 */
class OrderMethod
{
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
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("defaultForCrm")
     */
    public $defaultForCrm;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("defaultForApi")
     */
    public $defaultForApi;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isFromPos")
     */
    public $isFromPos;
}
