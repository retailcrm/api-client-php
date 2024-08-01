<?php

/**
 * PHP version 7.3
 *
 * @category CustomerInteractionCartClearRequest
 * @package  RetailCrm\Api\Model\Request\CustomerInteraction
 */

namespace RetailCrm\Api\Model\Request\CustomerInteraction;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomerInteractionCartClearRequest
 *
 * @category CustomerInteractionCartClearRequest
 * @package  RetailCrm\Api\Model\Request\CustomerInteraction
 */
class CustomerInteractionCartClearRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("siteBy")
     */
    public $siteBy;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomerInteraction\Cart
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\CustomerInteraction\Cart")
     * @Form\SerializedName("cart")
     * @Form\JsonField()
     */
    public $cart;
}
