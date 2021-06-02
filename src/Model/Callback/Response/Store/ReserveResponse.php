<?php

/**
 * PHP version 7.3
 *
 * @category ReserveResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Store
 */

namespace RetailCrm\Api\Model\Callback\Response\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ReserveResponse
 *
 * @category ReserveResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Store
 */
class ReserveResponse
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
     * @var \RetailCrm\Api\Model\Callback\Entity\Store\InventoriesDataModel[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Store\InventoriesDataModel>")
     * @JMS\SerializedName("inventories")
     */
    public $inventories;
}
