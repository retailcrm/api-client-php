<?php

/**
 * PHP version 7.3
 *
 * @category CostFilter
 * @package  RetailCrm\Api\Model\Filter\Costs
 */

namespace RetailCrm\Api\Model\Filter\Costs;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CostFilter
 *
 * @category CostFilter
 * @package  RetailCrm\Api\Model\Filter\Costs
 */
class CostFilter
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("minSumm")
     */
    public $minSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("maxSumm")
     */
    public $maxSumm;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("orderNumber")
     */
    public $orderNumber;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("comment")
     */
    public $comment;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("sites")
     */
    public $sites;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("createdBy")
     */
    public $createdBy;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("costGroups")
     */
    public $costGroups;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("costItems")
     */
    public $costItems;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("users")
     */
    public $users;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("dateFrom")
     */
    public $dateFrom;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("dateTo")
     */
    public $dateTo;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("createdAtFrom")
     */
    public $createdAtFrom;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("createdAtTo")
     */
    public $createdAtTo;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("orderIds")
     */
    public $orderIds;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("orderExternalIds")
     */
    public $orderExternalIds;
}
