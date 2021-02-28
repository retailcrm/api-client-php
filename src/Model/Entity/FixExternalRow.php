<?php

/**
 * PHP version 7.3
 *
 * @category FixExternalRow
 * @package  RetailCrm\Api\Model\Entity
 */

namespace RetailCrm\Api\Model\Entity;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class FixExternalRow
 *
 * @category FixExternalRow
 * @package  RetailCrm\Api\Model\Entity
 */
class FixExternalRow
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
     * FixExternalRow constructor.
     *
     * @param int    $id
     * @param string $externalId
     */
    public function __construct(int $id = 0, string $externalId = '')
    {
        if (0 !== $id) {
            $this->id = $id;
        }

        if ('' !== $externalId) {
            $this->externalId = $externalId;
        }
    }
}
