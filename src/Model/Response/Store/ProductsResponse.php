<?php

/**
 * PHP version 7.3
 *
 * @category ProductsResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */

namespace RetailCrm\Api\Model\Response\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class ProductsResponse
 *
 * @category ProductsResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */
class ProductsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\Product[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\Product>")
     * @JMS\SerializedName("products")
     */
    public $products;
}
