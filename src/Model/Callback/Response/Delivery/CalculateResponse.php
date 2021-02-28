<?php

/**
 * PHP version 7.3
 *
 * @category CalculateResponse
 * @package  RetailCrm\Api\Model\Callback\Response\ResponseProperty\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CalculateResponse
 *
 * @category CalculateResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */
class CalculateResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseCalculate[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseCalculate>")
     * @JMS\SerializedName("result")
     */
    public $result;
}
