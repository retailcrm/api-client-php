<?php

/**
 * PHP version 7.3
 *
 * @category BonusOperationsRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */

namespace RetailCrm\Api\Model\Request\Loyalty;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyBonusOperationsApiFilterType;
use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class BonusOperationsRequest
 *
 * @category BonusOperationsRequest
 * @package  RetailCrm\Api\Model\Request\Loyalty
 */
class AllBonusOperationsRequest implements RequestInterface
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("limit")
     */
    public $limit;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("cursor")
     */
    public $cursor;

    /**
     * @var LoyaltyBonusOperationsApiFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Loyalty\LoyaltyBonusOperationsApiFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
