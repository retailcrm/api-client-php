<?php

/**
 * PHP version 7.3
 *
 * @category Attachment
 * @package  RetailCrm\Api\Model\Entity\Files
 */

namespace RetailCrm\Api\Model\Entity\Files;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Attachment
 *
 * @category Attachment
 * @package  RetailCrm\Api\Model\Entity\Files
 */
class Attachment
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Files\AttachmentCustomer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Files\AttachmentCustomer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Files\AttachmentOrder
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Files\AttachmentOrder")
     * @JMS\SerializedName("order")
     */
    public $order;
}
