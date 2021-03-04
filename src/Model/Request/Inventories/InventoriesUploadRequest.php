<?php

/**
 * PHP version 7.3
 *
 * @category InventoriesUploadRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */

namespace RetailCrm\Api\Model\Request\Inventories;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class InventoriesUploadRequest
 *
 * @category InventoriesUploadRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */
class InventoriesUploadRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Inventories\Offer[]
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Inventories\Offer[]")
     * @Form\SerializedName("offers")
     * @Form\JsonField()
     */
    public $offers;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;
}
