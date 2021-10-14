<?php

/**
 * PHP version 7.3
 *
 * @category BonusAccountDetailsRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */

namespace RetailCrm\Api\Model\Request\Loyalty;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class BonusAccountDetailsRequest
 *
 * @category BonusAccountDetailsRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */
class BonusAccountDetailsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountBonusApiFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountBonusApiFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("status")
     */
    public $status;
}
