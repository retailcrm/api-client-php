<?php

/**
 * PHP version 7.3
 *
 * @category CostsRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */

namespace RetailCrm\Api\Model\Request\Costs;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CostsRequest
 *
 * @category CostsRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */
class CostsRequest implements RequestInterface
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

    /**
     * @var \RetailCrm\Api\Model\Filter\Costs\CostsFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Costs\CostsFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
