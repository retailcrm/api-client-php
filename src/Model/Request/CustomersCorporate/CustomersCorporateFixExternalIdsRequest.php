<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateFixExternalIdsRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCorporateFixExternalIdsRequest
 *
 * @category CustomersCorporateFixExternalIdsRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateFixExternalIdsRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\FixExternalRow[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\FixExternalRow>")
     * @Form\SerializedName("customersCorporate")
     * @Form\JsonField()
     */
    public $customersCorporate;
}
