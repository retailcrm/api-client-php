<?php

/**
 * PHP version 7.3
 *
 * @category PacksHistoryRequest
 * @package  RetailCrm\Api\Model\Request\Packs
 */

namespace RetailCrm\Api\Model\Request\Packs;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\HistoryPageLimitTrait;

/**
 * Class PacksHistoryRequest
 *
 * @category PacksHistoryRequest
 * @package  RetailCrm\Api\Model\Request\Packs
 */
class PacksHistoryRequest implements RequestInterface
{
    use HistoryPageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Packs\OrderProductPackHistoryFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Packs\OrderProductPackHistoryFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
