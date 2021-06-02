<?php

/**
 * PHP version 7.3
 *
 * @category Action
 * @package  RetailCrm\Api\Model\Entity\Integration\Payment
 */

namespace RetailCrm\Api\Model\Entity\Integration\Payment;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Actions
 *
 * @category Actions
 * @package  RetailCrm\Api\Model\Entity\Integration\Payment
 */
class Actions
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("create")
     */
    public $create;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("approve")
     */
    public $approve;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cancel")
     */
    public $cancel;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("refund")
     */
    public $refund;
}
