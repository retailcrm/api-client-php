<?php

/**
 * PHP 7.3
 *
 * @category OrderDeliveryCancelRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class OrderDeliveryCancelRequest
 *
 * @category OrderDeliveryCancelRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrderDeliveryCancelRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;

    /**
     * @var bool
     *
     * @Form\Type("bool")
     * @Form\SerializedName("force")
     */
    public $force;
}
