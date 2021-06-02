<?php

/**
 * PHP version 7.3
 *
 * @category CostsUploadResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */

namespace RetailCrm\Api\Model\Response\Costs;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CostsUploadResponse
 *
 * @category CostsUploadResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */
class CostsUploadResponse extends SuccessResponse
{
    /**
     * @var int[]
     *
     * @JMS\Type("array<int>")
     * @JMS\SerializedName("uploadedCosts")
     */
    public $uploadedCosts;
}
