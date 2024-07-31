<?php

/**
 * PHP version 7.3
 *
 * @category CartCustomer
 * @package  RetailCrm\Api\Model\Entity\CustomerInteraction
 */

namespace RetailCrm\Api\Model\Entity\CustomerInteraction;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class CartCustomer
 *
 * @category CartCustomer
 * @package  RetailCrm\Api\Model\Entity\CustomerInteraction
 */
class CartCustomer
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
     * @JMS\SerializedName("browserId")
     */
    public $browserId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("gaClientId")
     */
    public $gaClientId;
}
