<?php

/**
 * PHP version 7.3
 *
 * @category HistoryUser
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class HistoryUser
 *
 * @category HistoryUser
 * @package  RetailCrm\Api\Model\Entity
 */
class HistoryUser
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;
}
