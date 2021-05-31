<?php

/**
 * PHP version 7.3
 *
 * @category OperationBonus
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OperationBonus
 *
 * @category OperationBonus
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class OperationBonus
{
    /**
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("activationDate")
     */
    public $activationDate;
}
