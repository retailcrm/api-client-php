<?php

/**
 * PHP version 7.3
 *
 * @category TaskFilter
 * @package  RetailCrm\Api\Model\Filter\Tasks
 */

namespace RetailCrm\Api\Model\Filter\Tasks;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class TaskFilter
 *
 * @category TaskFilter
 * @package  RetailCrm\Api\Model\Filter\Tasks
 */
class TaskFilter
{
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
     * @Form\SerializedName("customer")
     */
    public $customer;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("status")
     */
    public $status;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("text")
     */
    public $text;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("performers")
     */
    public $performers;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("creators")
     */
    public $creators;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("dateFrom")
     */
    public $dateFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("dateTo")
     */
    public $dateTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("createdAtFrom")
     */
    public $createdAtFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("createdAtTo")
     */
    public $createdAtTo;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("completedAtFrom")
     */
    public $completedAtFrom;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("completedAtTo")
     */
    public $completedAtTo;
}
