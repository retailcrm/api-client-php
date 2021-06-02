<?php

/**
 * PHP version 7.3
 *
 * @category LegalEntitiesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class LegalEntitiesResponse
 *
 * @category LegalEntitiesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class LegalEntitiesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\LegalEntity[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\LegalEntity>")
     * @JMS\SerializedName("legalEntities")
     */
    public $legalEntities;
}
