<?php

/**
 * PHP version 7.3
 *
 * @category PaymentCreateResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Payments
 */

namespace RetailCrm\Api\Model\Callback\Response\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Callback\Response\ErrorResponse;

/**
 * Class PaymentCreateResponse
 *
 * @category PaymentCreateResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Payments
 */
class PaymentCreateResponse extends ErrorResponse
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Payments\PaymentCreateResult
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Payments\PaymentCreateResult")
     * @JMS\SerializedName("result")
     */
    public $result;
}
