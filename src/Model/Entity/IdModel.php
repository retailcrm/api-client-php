<?php

/**
 * PHP version 7.3
 *
 * @category IdModel
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class IdModel
 *
 * @category IdModel
 * @package  RetailCrm\Api\Model\Entity
 */
class IdModel
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;
}
