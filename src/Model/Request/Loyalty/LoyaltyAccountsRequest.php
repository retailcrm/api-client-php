<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccountsRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */

namespace RetailCrm\Api\Model\Request\Loyalty;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class LoyaltyAccountsRequest
 *
 * @category LoyaltyAccountsRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */
class LoyaltyAccountsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountApiFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountApiFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
