<?php

/**
 * PHP version 7.3
 *
 * @category ProductPropertyGroup
 * @package  RetailCrm\Api\Model\Filter\Inventories
 */

namespace RetailCrm\Api\Model\Filter\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ProductPropertyGroup
 *
 * @category ProductPropertyGroup
 * @package  RetailCrm\Api\Model\Filter\Inventories
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
