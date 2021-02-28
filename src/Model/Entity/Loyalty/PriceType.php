<?php

/**
 * PHP version 7.3
 *
 * @category PriceType
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class PriceType
 *
 * @category PriceType
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class PriceType
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * PriceType constructor.
     *
     * @param string $code
     */
    public function __construct(string $code = '')
    {
        if ('' !== $code) {
            $this->code = $code;
        }
    }
}
