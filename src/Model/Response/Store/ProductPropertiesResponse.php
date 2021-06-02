<?php

/**
 * PHP version 7.3
 *
 * @category ProductPropertiesResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */

namespace RetailCrm\Api\Model\Response\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class ProductPropertiesResponse
 *
 * @category ProductPropertiesResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */
class ProductPropertiesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Filter\Store\ProductProperty[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Filter\Store\ProductProperty>")
     * @JMS\SerializedName("properties")
     */
    public $properties;
}
