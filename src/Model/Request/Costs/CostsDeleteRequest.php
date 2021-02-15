<?php

/**
 * PHP version 7.3
 *
 * @category CostsDeleteRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */

namespace RetailCrm\Api\Model\Request\Costs;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CostsDeleteRequest
 *
 * @category CostsDeleteRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */
class CostsDeleteRequest implements RequestInterface
{
    /**
     * @var int[]
     *
     * @Form\Type("array<int>")
     * @Form\SerializedName("ids")
     */
    public $ids = [];
}
