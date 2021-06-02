<?php

/**
 * PHP version 7.3
 *
 * @category CostsRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */

namespace RetailCrm\Api\Model\Request\Costs;

use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class CostsRequest
 *
 * @category CostsRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */
class CostsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Costs\CostFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Costs\CostFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
