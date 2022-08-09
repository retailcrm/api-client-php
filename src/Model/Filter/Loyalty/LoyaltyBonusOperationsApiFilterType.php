<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyBonusOperationsApiFilterType
 * @package  RetailCrm\Api\Model\Filter\Loyalty
 */

namespace RetailCrm\Api\Model\Filter\Loyalty;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class LoyaltyBonusOperationsApiFilterType
 *
 * @category LoyaltyBonusOperationsApiFilterType
 * @package  RetailCrm\Api\Model\Filter\Loyalty
 */
class LoyaltyBonusOperationsApiFilterType
{
    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("loyalties")
     */
    public $loyalties;

    /**
     * @param int[] $loyalties
     */
    public function __construct(array $loyalties = [])
    {
        $this->loyalties = $loyalties;
    }
}
