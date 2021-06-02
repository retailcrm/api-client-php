<?php

/**
 * PHP version 7.3
 *
 * @category PaymentCreateResult
 * @package  RetailCrm\Api\Model\Callback\Entity\Payments
 */

namespace RetailCrm\Api\Model\Callback\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PaymentCreateResult
 *
 * @category PaymentCreateResult
 * @package  RetailCrm\Api\Model\Callback\Entity\Payments
 */
class PaymentCreateResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("paymentId")
     */
    public $paymentId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoiceUrl")
     */
    public $invoiceUrl;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("cancellable")
     */
    public $cancellable;
}
