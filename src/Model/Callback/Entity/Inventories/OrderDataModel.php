<?php

/**
 * PHP version 7.3
 *
 * @category OrderDataModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Inventories
 */

namespace RetailCrm\Api\Model\Callback\Entity\Inventories;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderDataModel
 *
 * @category OrderDataModel
 * @package  RetailCrm\Api\Model\Callback\Entity\Inventories
 */
class OrderDataModel
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

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;
}
