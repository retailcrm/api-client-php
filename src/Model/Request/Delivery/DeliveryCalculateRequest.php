<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryCalculateRequest
 * @package  RetailCrm\Api\Model\Request\Delivery
 */

namespace RetailCrm\Api\Model\Request\Delivery;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class DeliveryCalculateRequest
 *
 * @category DeliveryCalculateRequest
 * @package  RetailCrm\Api\Model\Request\Delivery
 */
class DeliveryCalculateRequest implements RequestInterface
{
    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("deliveryTypeCodes")
     * @Form\JsonField()
     */
    public $deliveryTypeCodes;

    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\SerializedOrder
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Delivery\SerializedOrder")
     * @Form\SerializedName("order")
     * @Form\JsonField()
     */
    public $order;
}
