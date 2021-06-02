<?php

/**
 * PHP version 7.3
 *
 * @category OrderTypesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\OrderType;

/**
 * Class OrderTypesEditRequest
 *
 * @category OrderTypesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class OrderTypesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\OrderType
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\OrderType")
     * @Form\SerializedName("orderType")
     * @Form\JsonField()
     */
    public $orderType;

    /**
     * OrderTypesEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\OrderType|null $orderType
     */
    public function __construct(?OrderType $orderType = null)
    {
        if (null !== $orderType) {
            $this->orderType = $orderType;
        }
    }
}
