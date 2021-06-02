<?php

/**
 * PHP version 7.3
 *
 * @category FileFilter
 * @package  RetailCrm\Api\Model\Filter\Files
 */

namespace RetailCrm\Api\Model\Filter\Files;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class FileFilter
 *
 * @category FileFilter
 * @package  RetailCrm\Api\Model\Filter\Files
 */
class FileFilter
{
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

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("customerIds")
     */
    public $customerIds;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("customerExternalIds")
     */
    public $customerExternalIds;

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
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("sizeFrom")
     */
    public $sizeFrom;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("sizeTo")
     */
    public $sizeTo;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("type")
     */
    public $type;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("filename")
     */
    public $filename;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("isAttached")
     */
    public $isAttached;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("sites")
     */
    public $sites;
}
