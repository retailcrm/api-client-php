<?php

/**
 * PHP version 7.3
 *
 * @category ProductGroupsEditRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Model\Entity\Store\SerializedProductGroup;
use RetailCrm\Api\Model\Request\BySiteRequest;

/**
 * Class ProductGroupsEditRequest
 *
 * @category ProductGroupsEditRequest
 * @package  RetailCrm\Api\Model\Request\Store
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class ProductGroupsEditRequest extends BySiteRequest
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\SerializedProductGroup
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Store\SerializedProductGroup")
     * @Form\SerializedName("productGroup")
     * @Form\JsonField()
     */
    public $productGroup;

    /**
     * ProductGroupsEditRequest constructor.
     *
     * @param SerializedProductGroup $productGroup
     * @param string $by
     * @param string $site
     */
    public function __construct(SerializedProductGroup $productGroup, string $by = '', string $site = '')
    {
        $this->productGroup = $productGroup;

        parent::__construct($by, $site);
    }
}
