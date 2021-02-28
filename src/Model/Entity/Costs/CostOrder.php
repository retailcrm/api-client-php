<?php

/**
 * PHP version 7.3
 *
 * @category CostOrder
 * @package  RetailCrm\Api\Model\Entity\Costs
 */

namespace RetailCrm\Api\Model\Entity\Costs;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CostOrder
 *
 * @category CostOrder
 * @package  RetailCrm\Api\Model\Entity\Costs
 */
class CostOrder
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("number")
     */
    public $number;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;
}
