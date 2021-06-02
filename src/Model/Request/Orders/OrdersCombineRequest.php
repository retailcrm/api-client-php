<?php

/**
 * PHP version 7.3
 *
 * @category OrdersCombineRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class OrdersCombineRequest
 *
 * @category OrdersCombineRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersCombineRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("technique")
     */
    public $technique;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\SerializedOrderReference
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Orders\SerializedOrderReference")
     * @Form\SerializedName("order")
     * @Form\JsonField()
     */
    public $order;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\SerializedOrderReference
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Orders\SerializedOrderReference")
     * @Form\SerializedName("resultOrder")
     * @Form\JsonField()
     */
    public $resultOrder;
}
