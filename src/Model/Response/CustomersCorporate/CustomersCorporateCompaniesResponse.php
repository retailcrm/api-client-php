<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateCompaniesResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Response\CustomersCorporate;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class CustomersCorporateCompaniesResponse
 *
 * @category CustomersCorporateCompaniesResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */
class CustomersCorporateCompaniesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\Company[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\CustomersCorporate\Company>")
     * @JMS\SerializedName("companies")
     */
    public $companies;
}
