<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyAccountBonusOperationsApiFilterType
 * @package  RetailCrm\Api\Model\Filter\Loyalty
 */

namespace RetailCrm\Api\Model\Filter\Loyalty;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class LoyaltyAccountBonusOperationsApiFilterType
 *
 * @category LoyaltyAccountBonusOperationsApiFilterType
 * @package  RetailCrm\Api\Model\Filter\Loyalty
 *
 * @SuppressWarnings(PHPMD.LongClassName)
 */
class LoyaltyAccountBonusOperationsApiFilterType
{
    /**
     * @var \DateTime
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("createdAtFrom")
     */
    public $createdAtFrom;

    /**
     * @var \DateTime
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("createdAtTo")
     */
    public $createdAtTo;
}
