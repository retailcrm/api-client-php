<?php

/**
 * PHP version 7.3
 *
 * @category PaymentRefund
 * @package  RetailCrm\Api\Model\Entity\Payments
 */

namespace RetailCrm\Api\Model\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PaymentRefund
 *
 * @category PaymentRefund
 * @package  RetailCrm\Api\Model\Entity\Payments
 */
class PaymentRefund extends ModuleRefund
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;
}
