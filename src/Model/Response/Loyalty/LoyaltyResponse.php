<?php

/**
 * PHP 7.3
 *
 * @category LoyaltyResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class LoyaltyResponse
 *
 * @category LoyaltyResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class LoyaltyResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\Loyalty
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Loyalty\Loyalty")
     * @JMS\SerializedName("loyalty")
     */
    public $loyalty;

    /**
     * @var array<string, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("requiredFields")
     */
    public $requiredFields;
}
