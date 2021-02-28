<?php

/**
 * PHP version 7.3
 *
 * @category CustomersUploadResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */

namespace RetailCrm\Api\Model\Response\Customers;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomersUploadResponse
 *
 * @category CustomersUploadResponse
 * @package  RetailCrm\Api\Model\Response\Customers
 */
class CustomersUploadResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\FixExternalRow[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\FixExternalRow>")
     * @JMS\SerializedName("uploadedCustomers")
     */
    public $uploadedCustomers;
}
