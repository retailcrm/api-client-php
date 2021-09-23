<?php

/**
 * PHP version 7.3
 *
 * @category SerializedEntityOrder
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedEntityOrder
 *
 * @category SerializedEntityOrder
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */
class SerializedEntityOrder
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
     * @JMS\SerializedName("number")
     */
    public $number;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("applyRound")
     */
    public $applyRound;

    /**
     * SerializedEntityOrder constructor.
     *
     * @param int $id
     * @param string $externalId
     * @param string $number
     * @param bool $applyRound
     */
    public function __construct(int $id = 0, string $externalId = '', string $number = '', bool $applyRound = false)
    {
        if (0 !== $id) {
            $this->id = $id;
        }

        if ('' !== $externalId) {
            $this->externalId = $externalId;
        }

        if ('' !== $number) {
            $this->number = $number;
        }

        if (false !== $applyRound) {
            $this->applyRound = $applyRound;
        }
    }

    /**
     * Returns this entity with specified ID
     *
     * @param int $id
     * @param bool $applyRound
     *
     * @return self
     */
    public static function withId(int $id, bool $applyRound = false): self
    {
        return new self($id, '', '', $applyRound);
    }


    /**
     * Returns this entity with specified external ID
     *
     * @param string $externalId
     * @param bool $applyRound
     *
     * @return self
     */
    public static function withExternalId(string $externalId, bool $applyRound = false): self
    {
        return new self(0, $externalId, '', $applyRound);
    }

    /**
     * Returns this entity with specified order number
     *
     * @param string $number
     * @param bool $applyRound
     *
     * @return self
     */
    public static function withNumber(string $number, bool $applyRound = false): self
    {
        return new self(0, '', $number, $applyRound);
    }
}
