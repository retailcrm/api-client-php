<?php

/**
 * PHP version 7.3
 *
 * @category OrderMethodsEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\OrderMethod;

/**
 * Class OrderMethodsEditRequest
 *
 * @category OrderMethodsEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class OrderMethodsEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\OrderMethod
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\OrderMethod")
     * @Form\SerializedName("orderMethod")
     * @Form\JsonField()
     */
    public $orderMethod;

    /**
     * OrderMethodsEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\OrderMethod|null $orderMethod
     */
    public function __construct(?OrderMethod $orderMethod = null)
    {
        if (null !== $orderMethod) {
            $this->orderMethod = $orderMethod;
        }
    }
}
