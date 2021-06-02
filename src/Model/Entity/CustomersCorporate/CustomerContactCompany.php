<?php

/**
 * PHP version 7.3
 *
 * @category CustomerContactCompany
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CustomerContactCompany
 *
 * @category CustomerContactCompany
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class CustomerContactCompany extends EntityWithExternalIdInput
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput")
     * @JMS\SerializedName("company")
     */
    public $company;
}
