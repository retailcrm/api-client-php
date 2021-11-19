<?php

/**
 * PHP version 7.3
 *
 * @category ProductBatchEditRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class ProductBatchEditRequest
 *
 * @category ProductBatchEditRequest
 * @package  RetailCrm\Api\Model\Response\Store
 */
class ProductBatchEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\ProductEditInput[]
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Store\ProductEditInput[]")
     * @Form\SerializedName("products")
     * @Form\JsonField()
     */
    public $products;

    /**
     * ProductBatchEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Store\ProductEditInput[] $products
     */
    public function __construct(array $products = [])
    {
        if (count($products) > 0) {
            $this->products = $products;
        }
    }
}
