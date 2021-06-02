<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class CustomersCorporateRequest
 *
 * @category CustomersCorporateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerCorporateFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerCorporateFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
