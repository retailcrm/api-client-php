<?php

/**
 * PHP version 7.3
 *
 * @category HistoryApiKey
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class HistoryApiKey
 *
 * @category HistoryApiKey
 * @package  RetailCrm\Api\Model\Entity
 */
class HistoryApiKey
{
    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("current")
     */
    public $current;
}
