<?php

/**
 * PHP version 7.3
 *
 * @category ModuleApiRequest
 * @package  RetailCrm\Api\Model\Callback\Entity\Payments
 */

namespace RetailCrm\Api\Model\Callback\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ModuleApiRequest
 *
 * @category ModuleApiRequest
 * @package  RetailCrm\Api\Model\Callback\Entity\Payments
 */
class ModuleApiRequest
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("paymentId")
     */
    public $paymentId;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;
}
