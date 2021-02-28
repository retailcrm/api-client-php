<?php

/**
 * PHP version 7.3
 *
 * @category CodeValueModel
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CodeValueModel
 *
 * @category CodeValueModel
 * @package  RetailCrm\Api\Model\Entity
 */
class CodeValueModel
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
     * @JMS\SerializedName("value")
     */
    public $value;
}
