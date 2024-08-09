<?php

/**
 * PHP version 7.3
 *
 * @category ProductPropertyValuesResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */

namespace RetailCrm\Api\Model\Response\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class ProductPropertyValuesResponse
 *
 * @category ProductPropertyValuesResponse
 * @package  RetailCrm\Api\Model\Response\Store
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class ProductPropertyValuesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\ProductPropertyValue[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\ProductPropertyValue>")
     * @JMS\SerializedName("productPropertyValues")
     */
    public $productPropertyValues;
}
