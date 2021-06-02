<?php

/**
 * PHP version 7.3
 *
 * @category PaymentStatusesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class PaymentStatusesResponse
 *
 * @category PaymentStatusesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class PaymentStatusesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\PaymentStatus[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\PaymentStatus>")
     * @JMS\SerializedName("paymentStatuses")
     */
    public $paymentStatuses;
}
