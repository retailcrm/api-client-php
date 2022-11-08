<?php

/**
 * PHP version 7.3
 *
 * @category ProductsBatchCreateResponse
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Response\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class ProductsBatchCreateResponse
 *
 * @category ProductBatchEditResponse
 * @package  RetailCrm\Api\Model\Response\Store
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class ProductsBatchCreateResponse extends SuccessResponse
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("processedProductsCount")
     */
    public $processedProductsCount;

    /**
     * @var array<int>
     *
     * @JMS\Type("array<int>")
     * @JMS\SerializedName("addedProducts")
     */
    public $addedProducts;
}
