<?php

/**
 * PHP version 7.3
 *
 * @category PageLimitTrait
 * @package  RetailCrm\Api\Model\Request\Traits
 */

namespace RetailCrm\Api\Model\Request\Traits;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Trait PageLimitTrait
 *
 * @category PageLimitTrait
 * @package  RetailCrm\Api\Model\Request\Traits
 */
trait PageLimitTrait
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("limit")
     */
    public $limit;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("page")
     */
    public $page;
}
