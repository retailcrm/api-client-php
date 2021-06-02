<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyCalculateRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */

namespace RetailCrm\Api\Model\Request\Loyalty;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class LoyaltyCalculateRequest
 *
 * @category LoyaltyCalculateRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */
class LoyaltyCalculateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\SerializedOrder
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Loyalty\SerializedOrder")
     * @Form\SerializedName("order")
     * @Form\JsonField()
     */
    public $order;

    /**
     * @var float
     *
     * @Form\Type("float")
     * @Form\SerializedName("bonuses")
     */
    public $bonuses;
}
