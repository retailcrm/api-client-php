<?php

/**
 * PHP version 7.3
 *
 * @category DeliveryShipmentsRequest
 * @package  RetailCrm\Api\Model\Request\Delivery
 */

namespace RetailCrm\Api\Model\Request\Delivery;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class DeliveryShipmentsRequest
 *
 * @category DeliveryShipmentsRequest
 * @package  RetailCrm\Api\Model\Request\Delivery
 */
class DeliveryShipmentsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Delivery\ApiDeliveryShipmentFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Delivery\ApiDeliveryShipmentFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
