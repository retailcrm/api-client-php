<?php

/**
 * PHP version 7.3
 *
 * @category ProductGroupsResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */

namespace RetailCrm\Api\Model\Response\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class ProductGroupsResponse
 *
 * @category ProductGroupsResponse
 * @package  RetailCrm\Api\Model\Response\Inventories
 */
class ProductGroupsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Inventories\ProductGroup[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Inventories\ProductGroup>")
     * @JMS\SerializedName("productGroup")
     */
    public $productGroup;
}
