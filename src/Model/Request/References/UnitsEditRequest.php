<?php

/**
 * PHP version 7.3
 *
 * @category UnitsEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\SerializedUnit;

/**
 * Class UnitsEditRequest
 *
 * @category UnitsEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class UnitsEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\SerializedUnit
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\SerializedUnit")
     * @Form\SerializedName("unit")
     * @Form\JsonField()
     */
    public $unit;

    /**
     * UnitsEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\SerializedUnit|null $unit
     */
    public function __construct(?SerializedUnit $unit = null)
    {
        if (null !== $unit) {
            $this->unit = $unit;
        }
    }
}
