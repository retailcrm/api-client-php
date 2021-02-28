<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderProductOffer
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedOrderProductOffer
 *
 * @category SerializedOrderProductOffer
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class SerializedOrderProductOffer
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
     * @JMS\SerializedName("xmlId")
     */
    public $xmlId;

    /**
     * SerializedOrderProductOffer constructor.
     *
     * @param int    $id
     * @param string $externalId
     * @param string $xmlId
     */
    public function __construct(int $id = 0, string $externalId = '', string $xmlId = '')
    {
        if (0 !== $id) {
            $this->id = $id;
        }

        if ('' !== $externalId) {
            $this->externalId = $externalId;
        }

        if ('' !== $xmlId) {
            $this->xmlId = $xmlId;
        }
    }

    /**
     * Returns product offer with specified ID.
     *
     * @param int $id
     *
     * @return self
     */
    public static function withId(int $id): self
    {
        return new self($id);
    }

    /**
     * Returns product offer with specified external ID.
     *
     * @param string $externalId
     *
     * @return self
     */
    public static function withExternalId(string $externalId): self
    {
        return new self(0, $externalId);
    }

    /**
     * Returns product offer with specified XML ID.
     *
     * @param string $xmlId
     *
     * @return self
     */
    public static function withXmlId(string $xmlId): self
    {
        return new self(0, '', $xmlId);
    }
}
