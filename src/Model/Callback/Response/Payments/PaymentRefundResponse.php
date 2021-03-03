<?php

/**
 * PHP version 7.3
 *
 * @category PaymentRefundResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Payments
 */

namespace RetailCrm\Api\Model\Callback\Response\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Callback\Response\ErrorResponse;

/**
 * Class PaymentRefundResponse
 *
 * @category PaymentRefundResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Payments
 */
class PaymentRefundResponse extends ErrorResponse
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Payments\ModuleRefund
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Payments\ModuleRefund")
     * @JMS\SerializedName("result")
     */
    public $result;
}
