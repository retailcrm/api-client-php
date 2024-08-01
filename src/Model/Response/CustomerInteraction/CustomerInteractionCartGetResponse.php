<?php

/**
 * PHP version 7.3
 *
 * @category CustomerInteractionCartGetResponse
 * @package  RetailCrm\Api\Model\Response\CustomerInteraction
 */

namespace RetailCrm\Api\Model\Response\CustomerInteraction;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomerInteractionCartGetResponse
 *
 * @category CustomerInteractionCartGetResponse
 * @package  RetailCrm\Api\Model\Response\CustomerInteraction
 */
class CustomerInteractionCartGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomerInteraction\Cart
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomerInteraction\Cart")
     * @JMS\SerializedName("cart")
     */
    public $cart;
}
