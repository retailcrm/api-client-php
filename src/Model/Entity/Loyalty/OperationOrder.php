<?php

/**
 * PHP version 7.3
 *
 * @category OperationOrder
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OperationOrder
 *
 * @category OperationOrder
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class OperationOrder
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
     * @JMS\SerializedName("externalId")
     */
    public $externalId;
}
