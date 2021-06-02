<?php

/**
 * PHP version 7.3
 *
 * @category RequestPrint
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class RequestPrint
 *
 * @category RequestPrint
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */
class RequestPrint
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("entityType")
     */
    public $entityType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("deliveryIds")
     */
    public $deliveryIds;
}
