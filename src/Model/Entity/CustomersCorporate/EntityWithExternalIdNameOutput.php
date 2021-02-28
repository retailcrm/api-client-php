<?php

/**
 * PHP version 7.3
 *
 * @category EntityWithExternalIdNameOutput
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Entity\CustomersCorporate;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class EntityWithExternalIdNameOutput
 *
 * @category EntityWithExternalIdNameOutput
 * @package  RetailCrm\Api\Model\Entity\CustomersCorporate
 */
class EntityWithExternalIdNameOutput extends EntityWithExternalIdInput
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;
}
