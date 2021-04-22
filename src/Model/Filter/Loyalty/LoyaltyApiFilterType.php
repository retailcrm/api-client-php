<?php

/**
 * PHP 7.3
 *
 * @category LoyaltyApiFilterType
 * @package  RetailCrm\Api\Model\Filter\Loyalty
 */

namespace RetailCrm\Api\Model\Filter\Loyalty;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class LoyaltyApiFilterType
 *
 * @category LoyaltyApiFilterType
 * @package  RetailCrm\Api\Model\Filter\Loyalty
 */
class LoyaltyApiFilterType
{
    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("active")
     */
    public $active;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("blocked")
     */
    public $blocked;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("sites")
     */
    public $sites;
}
