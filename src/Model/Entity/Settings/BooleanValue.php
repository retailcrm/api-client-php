<?php

/**
 * PHP version 7.3
 *
 * @category BooleanValue
 * @package  RetailCrm\Api\Model\Entity\Settings
 */

namespace RetailCrm\Api\Model\Entity\Settings;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class BooleanValue
 *
 * @category BooleanValue
 * @package  RetailCrm\Api\Model\Entity\Settings
 */
class BooleanValue
{
    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("value")
     */
    public $value;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("updated_at")
     */
    public $updatedAt;
}
