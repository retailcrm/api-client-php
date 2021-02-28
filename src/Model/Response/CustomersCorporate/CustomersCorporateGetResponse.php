<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateGetResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Response\CustomersCorporate;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomersCorporateGetResponse
 *
 * @category CustomersCorporateGetResponse
 * @package  RetailCrm\Api\Model\Response\CustomersCorporate
 */
class CustomersCorporateGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate")
     * @JMS\SerializedName("customerCorporate")
     */
    public $customerCorporate;
}
