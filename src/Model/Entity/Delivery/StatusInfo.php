<?php

/**
 * PHP version 7.3
 *
 * @category StatusInfo
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class StatusInfo
 *
 * @category StatusInfo
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */
class StatusInfo
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @JMS\SerializedName("updatedAt")
     */
    public $updatedAt;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;
}
