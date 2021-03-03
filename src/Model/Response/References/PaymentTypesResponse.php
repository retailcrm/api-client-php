<?php

/**
 * PHP version 7.3
 *
 * @category PaymentTypesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class PaymentTypesResponse
 *
 * @category PaymentTypesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class PaymentTypesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\PaymentType[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\PaymentType>")
     * @JMS\SerializedName("paymentTypes")
     */
    public $paymentTypes;
}
