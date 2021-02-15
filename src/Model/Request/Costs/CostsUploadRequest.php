<?php

/**
 * PHP version 7.3
 *
 * @category CostsUploadRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */

namespace RetailCrm\Api\Model\Request\Costs;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CostsUploadRequest
 *
 * @category CostsUploadRequest
 * @package  RetailCrm\Api\Model\Request\Costs
 */
class CostsUploadRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Costs\Cost[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\Costs\Cost>")
     * @Form\SerializedName("costs")
     */
    public $costs;
}
