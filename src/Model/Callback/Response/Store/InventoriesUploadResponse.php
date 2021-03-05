<?php

/**
 * PHP version 7.3
 *
 * @category InventoriesUploadResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Store
 */

namespace RetailCrm\Api\Model\Callback\Response\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class InventoriesUploadResponse
 *
 * @category InventoriesUploadResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Store
 */
class InventoriesUploadResponse
{
    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("success")
     */
    public $success;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("errorMsg")
     */
    public $errorMsg;

    /**
     * @var \RetailCrm\Api\Model\Entity\Store\Offer[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Store\Offer>")
     * @JMS\SerializedName("offers")
     */
    public $offers;
}
