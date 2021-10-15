<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccountBonusApiFilterType
 * @package  RetailCrm\Api\Model\Filter\Loyalty
 */

namespace RetailCrm\Api\Model\Filter\Loyalty;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class LoyaltyAccountBonusApiFilterType
 *
 * @category LoyaltyAccountBonusApiFilterType
 * @package  RetailCrm\Api\Model\Filter\Loyalty
 */
class LoyaltyAccountBonusApiFilterType
{
    /**
     * @var \DateTime
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("date")
     */
    public $date;
}
