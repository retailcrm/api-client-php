<?php

/**
 * PHP version 7.3
 *
 * @category ProductGroupsCreateRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Store\SerializedProductGroup;

/**
 * Class ProductGroupsCreateRequest
 *
 * @category ProductGroupsCreateRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */
class ProductGroupsCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\SerializedProductGroup
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Store\SerializedProductGroup")
     * @Form\SerializedName("productGroup")
     * @Form\JsonField()
     */
    public $productGroup;

    public function __construct(SerializedProductGroup $productGroup)
    {
        $this->productGroup = $productGroup;
    }
}
