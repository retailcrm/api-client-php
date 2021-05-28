<?php

/**
 * PHP version 7.3
 *
 * @category HistoryPageLimitTrait
 * @package  RetailCrm\Api\Model\Request\Traits
 */

namespace RetailCrm\Api\Model\Request\Traits;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Trait HistoryPageLimitTrait
 *
 * @category HistoryPageLimitTrait
 * @package  RetailCrm\Api\Model\Request\Traits
 */
trait HistoryPageLimitTrait
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("limit")
     */
    public $limit;
}
