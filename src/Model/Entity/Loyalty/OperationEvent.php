<?php

/**
 * PHP version 7.3
 *
 * @category OperationEvent
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OperationEvent
 *
 * @category OperationEvent
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class OperationEvent
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
     * @JMS\SerializedName("type")
     */
    public $type;
}
