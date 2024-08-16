<?php

/**
 * PHP version 7.3
 *
 * @category OffersRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class OffersRequest
 *
 * @category OffersRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */
class OffersRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Store\OfferFilterType
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Store\OfferFilterType")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
