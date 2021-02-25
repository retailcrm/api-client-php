<?php

/**
 * PHP version 7.3
 *
 * @category CustomersFixExternalIdsRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersFixExternalIdsRequest
 *
 * @category CustomersFixExternalIdsRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersFixExternalIdsRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\FixExternalRow[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\FixExternalRow>")
     * @Form\SerializedName("customers")
     * @Form\JsonField()
     */
    public $customers;
}
