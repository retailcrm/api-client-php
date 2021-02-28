<?php

/**
 * PHP version 7.3
 *
 * @category EntityWithExternalIdInput
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class EntityWithExternalIdInput
 *
 * @category EntityWithExternalIdInput
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class EntityWithExternalIdInput
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
}
