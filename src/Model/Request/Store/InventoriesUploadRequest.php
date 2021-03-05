<?php

/**
 * PHP version 7.3
 *
 * @category InventoriesUploadRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class InventoriesUploadRequest
 *
 * @category InventoriesUploadRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */
class InventoriesUploadRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\Offer[]
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Store\Offer[]")
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
