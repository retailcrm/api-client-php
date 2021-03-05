<?php

/**
 * PHP version 7.3
 *
 * @category Order
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */

namespace RetailCrm\Api\Model\Entity\Tasks;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Order
 *
 * @category Order
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */
class Order
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

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;
}
