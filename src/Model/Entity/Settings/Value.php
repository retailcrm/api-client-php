<?php

/**
 * PHP version 7.3
 *
 * @category Value
 * @package  RetailCrm\Api\Model\Entity\Settings
 */

namespace RetailCrm\Api\Model\Entity\Settings;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Value
 *
 * @category Value
 * @package  RetailCrm\Api\Model\Entity\Settings
 */
class Value
{
    /**
     * @var string
     *
     * @JMS\Type("string")
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
