<?php

/**
 * PHP version 7.3
 *
 * @category GetResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class GetResponse
 *
 * @category GetResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */
class GetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseLoadDeliveryData
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseLoadDeliveryData")
     * @JMS\SerializedName("result")
     */
    public $result;
}
