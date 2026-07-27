<?php

/**
 * PHP version 7.3
 *
 * @category MarkingObject
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class MarkingObject
 *
 * @category MarkingObject
 * @package  RetailCrm\Api\Model\Entity
 */
class MarkingObject
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
     * @JMS\SerializedName("provider")
     */
    public $provider;
}
