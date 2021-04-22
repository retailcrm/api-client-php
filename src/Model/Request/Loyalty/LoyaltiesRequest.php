<?php

/**
 * PHP 7.3
 *
 * @category LoyaltiesRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */

namespace RetailCrm\Api\Model\Request\Loyalty;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class LoyaltiesRequest
 *
 * @category LoyaltiesRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */
class LoyaltiesRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Loyalty\LoyaltyApiFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Loyalty\LoyaltyApiFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
