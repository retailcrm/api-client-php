<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyBonusOperationsRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */

namespace RetailCrm\Api\Model\Request\Loyalty;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class LoyaltyBonusOperationsRequest
 *
 * @category LoyaltyBonusOperationsRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */
class LoyaltyBonusOperationsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountBonusOperationsApiFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountBonusOperationsApiFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
