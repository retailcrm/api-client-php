<?php

/**
 * PHP version 7.3
 *
 * @category ItemProperty
 * @package  RetailCrm\Api\Model\Entity\Orders\Items
 */

namespace RetailCrm\Api\Model\Entity\Orders\Items;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ItemProperty
 *
 * @category ItemProperty
 * @package  RetailCrm\Api\Model\Entity\Orders\Items
 */
class ItemProperty
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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("value")
     */
    public $value;
}
