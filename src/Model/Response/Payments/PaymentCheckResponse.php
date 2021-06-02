<?php

/**
 * PHP version 7.3
 *
 * @category PaymentCheckResponse
 * @package  RetailCrm\Api\Model\Response\Payments
 */

namespace RetailCrm\Api\Model\Response\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class PaymentCheckResponse
 *
 * @category PaymentCheckResponse
 * @package  RetailCrm\Api\Model\Response\Payments
 */
class PaymentCheckResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Payments\ApiCheckResponseResult
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Payments\ApiCheckResponseResult")
     * @JMS\SerializedName("result")
     */
    public $result;
}
