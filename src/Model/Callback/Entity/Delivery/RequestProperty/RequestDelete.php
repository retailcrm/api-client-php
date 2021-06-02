<?php

/**
 * PHP version 7.3
 *
 * @category RequestDelete
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class RequestDelete
 *
 * @category RequestDelete
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty
 */
class RequestDelete
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryId")
     */
    public $deliveryId;
}
