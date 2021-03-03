<?php

/**
 * PHP version 7.3
 *
 * @category ApiCreateInvoiceResponseResult
 * @package  RetailCrm\Api\Model\Entity\Payments
 */

namespace RetailCrm\Api\Model\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ApiCreateInvoiceResponseResult
 *
 * @category ApiCreateInvoiceResponseResult
 * @package  RetailCrm\Api\Model\Entity\Payments
 */
class ApiCreateInvoiceResponseResult
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("link")
     */
    public $link;
}
