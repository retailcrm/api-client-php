<?php

/**
 * PHP version 7.3
 *
 * @category TrackingRequest
 * @package  RetailCrm\Api\Model\Request\Delivery
 */

namespace RetailCrm\Api\Model\Request\Delivery;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class TrackingRequest
 *
 * @category TrackingRequest
 * @package  RetailCrm\Api\Model\Request\Delivery
 */
class TrackingRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Delivery\RequestStatusUpdateItem[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\Delivery\RequestStatusUpdateItem>")
     * @Form\SerializedName("statusUpdate")
     * @Form\JsonField()
     */
    public $statusUpdate;
}
