<?php

/**
 * PHP version 7.3
 *
 * @category PacksRequest
 * @package  RetailCrm\Api\Model\Request\Packs
 */

namespace RetailCrm\Api\Model\Request\Packs;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class PacksRequest
 *
 * @category PacksRequest
 * @package  RetailCrm\Api\Model\Request\Packs
 */
class PacksRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Packs\OrderProductPackFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Packs\OrderProductPackFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
