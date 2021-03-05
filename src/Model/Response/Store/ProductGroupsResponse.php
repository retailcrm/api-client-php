<?php

/**
 * PHP version 7.3
 *
 * @category ProductGroupsResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */

namespace RetailCrm\Api\Model\Response\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class ProductGroupsResponse
 *
 * @category ProductGroupsResponse
 * @package  RetailCrm\Api\Model\Response\Store
 */
class ProductGroupsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\ProductGroup[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\ProductGroup>")
     * @JMS\SerializedName("productGroup")
     */
    public $productGroup;
}
