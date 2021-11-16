<?php

/**
 * PHP version 7.3
 *
 * @category ProductPropertyGroup
 * @package  RetailCrm\Api\Model\Entity\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ProductPropertyGroup
 *
 * @category ProductPropertyGroup
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class ProductPropertyGroup
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;
}
