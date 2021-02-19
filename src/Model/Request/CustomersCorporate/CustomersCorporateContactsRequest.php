<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateContactsRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCorporateContactsRequest
 *
 * @category CustomersCorporateContactsRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateContactsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerContactFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\CustomersCorporate\CustomerContactFilter")
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
