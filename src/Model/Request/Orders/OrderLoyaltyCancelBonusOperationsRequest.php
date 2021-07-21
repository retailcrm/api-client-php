<?php

/**
 * PHP 7.3
 *
 * @category OrderLoyaltyCancelBonusOperationsRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder;

/**
 * Class OrderLoyaltyCancelBonusOperationsRequest
 *
 * @category OrderLoyaltyCancelBonusOperationsRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrderLoyaltyCancelBonusOperationsRequest implements RequestInterface
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
     * @Form\Type("RetailCrm\Api\Model\Entity\Orders\SerializedEntityOrder")
     * @Form\SerializedName("order")
     * @Form\JsonField()
     */
    public $order;

    /**
     * OrderLoyaltyCancelBonusOperationsRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder|null $order
     * @param string                                                        $site
     */
    public function __construct(SerializedEntityOrder $order = null, string $site = '')
    {
        $this->order = $order ?? new SerializedEntityOrder();
        $this->site = $site;
    }
}
