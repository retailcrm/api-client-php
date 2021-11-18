<?php

/**
 * PHP version 7.3
 *
 * @category ProductEditNotFoundResponse
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ProductEditNotFoundResponse
 *
 * @category ProductEditNotFoundResponse
 * @package  RetailCrm\Api\Model\Entity\Store
 */
class ProductEditNotFoundResponse
{
    /**
     * @var string
     *
     * @JMS\Type("string")
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
