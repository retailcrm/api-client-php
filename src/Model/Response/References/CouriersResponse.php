<?php

/**
 * PHP version 7.3
 *
 * @category CouriersResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CouriersResponse
 *
 * @category CouriersResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class CouriersResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\Courier[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\Courier>")
     * @JMS\SerializedName("couriers")
     */
    public $couriers;
}
