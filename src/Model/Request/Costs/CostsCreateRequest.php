<?php

/**
 * PHP version 7.3
 *
 * @category CostsCreateRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */

namespace RetailCrm\Api\Model\Request\Costs;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CostsCreateRequest
 *
 * @category CostsCreateRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */
class CostsCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Costs\Cost
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Costs\Cost")
     * @Form\SerializedName("cost")
     * @Form\JsonField()
     */
    public $cost;
}
