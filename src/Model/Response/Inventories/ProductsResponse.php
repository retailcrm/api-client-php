<?php

/**
 * PHP version 7.3
 *
 * @category ProductsResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */

namespace RetailCrm\Api\Model\Response\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class ProductsResponse
 *
 * @category ProductsResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */
class ProductsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Inventories\Product[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Inventories\Product>")
     * @JMS\SerializedName("products")
     */
    public $products;
}
