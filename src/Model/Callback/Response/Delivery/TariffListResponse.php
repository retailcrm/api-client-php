<?php

/**
 * PHP version 7.3
 *
 * @category TariffListResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class TariffListResponse
 *
 * @category TariffListResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */
class TariffListResponse
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\Tariff[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\Tariff>")
     * @JMS\SerializedName("result")
     */
    public $result;
}
