<?php

/**
 * PHP version 7.3
 *
 * @category AbstractLoyaltyEvent
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class AbstractLoyaltyEvent
 *
 * @category AbstractLoyaltyEvent
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class AbstractLoyaltyEvent
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;
}
