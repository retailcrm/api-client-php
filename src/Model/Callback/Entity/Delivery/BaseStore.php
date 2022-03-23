<?php

/**
 * PHP version 7.3
 *
 * @category BaseStore
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class BaseStore
 *
 * @category BaseStore
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class BaseStore
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
}
