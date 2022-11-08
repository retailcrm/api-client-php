<?php

/**
 * PHP version 7.3
 *
 * @category EntityWithExternalId
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class EntityWithExternalId
 *
 * @category EntityWithExternalId
 * @package  RetailCrm\Api\Model\Entity
 */
class EntityWithExternalId
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;
}
