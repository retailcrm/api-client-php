<?php

/**
 * Class ProductEditGroupInput
 *
 * @category ProductEditGroupInput
 * @package  RetailCrm\Api\Model\Response\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ProductEditGroupInput
 *
 * @category ProductEditGroupInput
 * @package  RetailCrm\Api\Model\Response\Store
 */
class ProductEditGroupInput
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;
}
