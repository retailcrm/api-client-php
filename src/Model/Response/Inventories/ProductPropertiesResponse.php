<?php

/**
 * PHP version 7.3
 *
 * @category ProductPropertiesResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */

namespace RetailCrm\Api\Model\Response\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class ProductPropertiesResponse
 *
 * @category ProductPropertiesResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */
class ProductPropertiesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Filter\Inventories\ProductProperty[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Filter\Inventories\ProductProperty>")
     * @JMS\SerializedName("properties")
     */
    public $properties;
}
