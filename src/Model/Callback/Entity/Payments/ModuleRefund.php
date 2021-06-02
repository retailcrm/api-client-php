<?php

/**
 * PHP version 7.3
 *
 * @category ModuleRefund
 * @package  RetailCrm\Api\Model\Callback\Entity\Payments
 */

namespace RetailCrm\Api\Model\Callback\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ModuleRefund
 *
 * @category ModuleRefund
 * @package  RetailCrm\Api\Model\Callback\Entity\Payments
 */
class ModuleRefund
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public $status;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;
}
