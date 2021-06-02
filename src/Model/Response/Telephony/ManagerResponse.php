<?php

/**
 * PHP version 7.3
 *
 * @category ManagerResponse
 * @package  RetailCrm\Api\Model\Response\Telephony
 */

namespace RetailCrm\Api\Model\Response\Telephony;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class ManagerResponse
 *
 * @category ManagerResponse
 * @package  RetailCrm\Api\Model\Response\Telephony
 */
class ManagerResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Telephony\SerializedManager
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Telephony\SerializedManager")
     * @JMS\SerializedName("manager")
     */
    public $manager;

    /**
     * @var \RetailCrm\Api\Model\Entity\Telephony\SerializedCustomer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Telephony\SerializedCustomer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Telephony\SerializedLinks
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Telephony\SerializedLinks")
     * @JMS\SerializedName("links")
     */
    public $links;
}
