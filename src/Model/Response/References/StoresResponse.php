<?php

/**
 * PHP version 7.3
 *
 * @category StoresResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class StoresResponse
 *
 * @category StoresResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class StoresResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\Store[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\Store>")
     * @JMS\SerializedName("stores")
     */
    public $stores;
}
