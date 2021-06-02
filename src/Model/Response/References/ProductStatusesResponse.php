<?php

/**
 * PHP version 7.3
 *
 * @category ProductStatusesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class ProductStatusesResponse
 *
 * @category ProductStatusesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class ProductStatusesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\OrderProductStatus[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\OrderProductStatus>")
     * @JMS\SerializedName("productStatuses")
     */
    public $productStatuses;
}
