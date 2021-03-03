<?php

/**
 * PHP version 7.3
 *
 * @category Shop
 * @package  RetailCrm\Api\Model\Entity\Integration\Payment
 */

namespace RetailCrm\Api\Model\Entity\Integration\Payment;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Shop
 *
 * @category Shop
 * @package  RetailCrm\Api\Model\Entity\Integration\Payment
 */
class Shop
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    public $active;

    /**
     * Shop constructor.
     *
     * @param string $code
     * @param string $name
     * @param bool   $active
     */
    public function __construct(string $code = '', string $name = '', ?bool $active = null)
    {
        if ('' !== $code) {
            $this->code   = $code;
        }

        if ('' !== $name) {
            $this->name   = $name;
        }

        if (null !== $active) {
            $this->active = $active;
        }
    }
}
