<?php

/**
 * PHP version 7.3
 *
 * @category ApiCheckResponseResult
 * @package  RetailCrm\Api\Model\Entity\Payments
 */

namespace RetailCrm\Api\Model\Entity\Payments;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ApiCheckResponseResult
 *
 * @category ApiCheckResponseResult
 * @package  RetailCrm\Api\Model\Entity\Payments
 */
class ApiCheckResponseResult
{
    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("success")
     */
    public $success;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("errorMsg")
     */
    public $errorMsg;
}
