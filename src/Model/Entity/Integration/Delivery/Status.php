<?php

/**
 * PHP version 7.3
 *
 * @category Status
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Integration\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Status
 *
 * @category Status
 * @package  RetailCrm\Api\Model\Entity\Integration\Delivery
 */
class Status
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
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isEditable")
     */
    public $isEditable;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isError")
     */
    public $isError;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("isPreprocessing")
     */
    public $isPreprocessing;
}
