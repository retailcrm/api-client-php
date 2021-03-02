<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateAddressesRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Model\Request\BySiteRequest;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class CustomersCorporateAddressesRequest
 *
 * @category CustomersCorporateAddressesRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateAddressesRequest extends BySiteRequest
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerAddressFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerAddressFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("externalId")
     */
    public $externalId;
}
