<?php

/**
 * PHP version 7.3
 *
 * @category SitesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class SitesResponse
 *
 * @category SitesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class SitesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\Site[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\Site>")
     * @JMS\SerializedName("sites")
     */
    public $sites;
}
