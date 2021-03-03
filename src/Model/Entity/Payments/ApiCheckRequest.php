<?php

/**
 * PHP version 7.3
 *
 * @category ApiCheckRequest
 * @package  RetailCrm\Api\Model\Entity\Payments
 */

namespace RetailCrm\Api\Model\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ApiCheckRequest
 *
 * @category ApiCheckRequest
 * @package  RetailCrm\Api\Model\Entity\Payments
 */
class ApiCheckRequest
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoiceUuid")
     */
    public $invoiceUuid;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("currency")
     */
    public $currency;
}
