<?php

/**
 * PHP version 7.3
 *
 * @category BonusDetail
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class BonusDetail
 *
 * @category BonusDetail
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class BonusDetail
{
    /**
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("date")
     */
    public $date;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("amount")
     */
    public $amount;
}
