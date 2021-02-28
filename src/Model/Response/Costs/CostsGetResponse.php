<?php

/**
 * PHP version 7.3
 *
 * @category CostsGetResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */

namespace RetailCrm\Api\Model\Response\Costs;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CostsGetResponse
 *
 * @category CostsGetResponse
 * @package  RetailCrm\Api\Model\Response\Costs
 */
class CostsGetResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Costs\Cost
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Costs\Cost")
     * @JMS\SerializedName("cost")
     */
    public $cost;
}
