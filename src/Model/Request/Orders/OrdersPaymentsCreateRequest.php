<?php

/**
 * PHP version 7.3
 *
 * @category OrdersPaymentsCreateRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class OrdersPaymentsCreateRequest
 *
 * @category OrdersPaymentsCreateRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersPaymentsCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\SerializedPayment
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Orders\SerializedPayment")
     * @Form\SerializedName("payment")
     * @Form\JsonField()
     */
    public $payment;
}
