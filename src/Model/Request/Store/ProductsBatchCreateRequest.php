<?php

/**
 * PHP version 7.3
 *
 * @category ProductsBatchCreateRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class ProductsBatchCreateRequest
 *
 * @category ProductsBatchCreateRequest
 * @package  RetailCrm\Api\Model\Response\Store
 */
class ProductsBatchCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\ProductCreateInput[]
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Store\ProductCreateInput[]")
     * @Form\SerializedName("products")
     * @Form\JsonField()
     */
    public $products;

    /**
     * ProductsBatchCreateRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Store\ProductCreateInput[] $products
     */
    public function __construct(array $products = [])
    {
        if (count($products) > 0) {
            $this->products = $products;
        }
    }
}
