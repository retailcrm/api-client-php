<?php

/**
 * PHP version 7.3
 *
 * @category Unit
 * @package  RetailCrm\Api\Model\Entity\Orders\Items
 */

namespace RetailCrm\Api\Model\Entity\Orders\Items;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class Unit
 *
 * @category Unit
 * @package  RetailCrm\Api\Model\Entity\Orders\Items
 */
class Unit
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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sym")
     */
    public $sym;

    /**
     * Unit constructor.
     *
     * @param string $code
     * @param string $name
     * @param string $sym
     */
    public function __construct(string $code = '', string $name = '', string $sym = '')
    {
        if ('' !== $code) {
            $this->code = $code;
        }

        if ('' !== $name) {
            $this->name = $name;
        }

        if ('' !== $sym) {
            $this->sym = $sym;
        }
    }
}
