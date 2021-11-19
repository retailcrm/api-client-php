<?php

/**
 * PHP version 7.3
 *
 * @category ProductBatchEditResponse
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Response\Store;

use RetailCrm\Api\Model\Response\SuccessResponse;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ProductBatchEditResponse
 *
 * @category ProductBatchEditResponse
 * @package  RetailCrm\Api\Model\Response\Store
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class ProductBatchEditResponse extends SuccessResponse
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("processedProductsCount")
     */
    public $processedProductsCount;

    /**
     * @var \RetailCrm\Api\Model\Entity\Store\ProductEditNotFoundResponse[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\ProductEditNotFoundResponse>")
     * @JMS\SerializedName("notFoundProducts")
     */
    public $notFoundProducts;
}
