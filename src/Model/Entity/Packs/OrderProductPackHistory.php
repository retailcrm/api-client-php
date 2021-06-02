<?php

/**
 * PHP version 7.3
 *
 * @category OrderProductPackHistory
 * @package  RetailCrm\Api\Model\Entity\Packs
 */

namespace RetailCrm\Api\Model\Entity\Packs;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class OrderProductPackHistory
 *
 * @category OrderProductPackHistory
 * @package  RetailCrm\Api\Model\Entity\Packs
 */
class OrderProductPackHistory
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("created")
     */
    public $created;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("deleted")
     */
    public $deleted;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("field")
     */
    public $field;

    /**
     * @var mixed
     *
     * @JMS\Type("mixed")
     * @JMS\SerializedName("oldValue")
     */
    public $oldValue;

    /**
     * @var mixed
     *
     * @JMS\Type("mixed")
     * @JMS\SerializedName("newValue")
     */
    public $newValue;

    /**
     * @var \RetailCrm\Api\Model\Entity\Packs\OrderProductPack
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Packs\OrderProductPack")
     * @JMS\SerializedName("pack")
     */
    public $pack;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryUser
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\HistoryUser")
     * @JMS\SerializedName("user")
     */
    public $user;
}
