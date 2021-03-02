<?php

/**
 * PHP version 7.3
 *
 * @category OrdersLoyaltyApplyRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class OrdersLoyaltyApplyRequest
 *
 * @category OrdersLoyaltyApplyRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersLoyaltyApplyRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder")
     * @Form\SerializedName("order")
     * @Form\JsonField()
     */
    public $order;

    /**
     * @var float
     *
     * @Form\Type("float")
     * @Form\SerializedName("bonuses")
     */
    public $bonuses;
}
