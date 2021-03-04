<?php

/**
 * PHP version 7.3
 *
 * @category InventoryFilterType
 * @package  RetailCrm\Api\Model\Filter\Inventories
 */

namespace RetailCrm\Api\Model\Filter\Inventories;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class InventoryFilterType
 *
 * @category InventoryFilterType
 * @package  RetailCrm\Api\Model\Filter\Inventories
 */
class InventoryFilterType
{
    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("productExternalId")
     */
    public $productExternalId;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("productArticle")
     */
    public $productArticle;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("offerExternalId")
     */
    public $offerExternalId;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("offerXmlId")
     */
    public $offerXmlId;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("offerArticle")
     */
    public $offerArticle;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("productActive")
     */
    public $productActive;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("offerActive")
     */
    public $offerActive;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("details")
     */
    public $details;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("sites")
     */
    public $sites;
}
