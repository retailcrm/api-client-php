<?php

/**
 * PHP version 7.3
 *
 * @category CostItemsEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\CostItem;

/**
 * Class CostItemsEditRequest
 *
 * @category CostItemsEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class CostItemsEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\CostItem
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\CostItem")
     * @Form\SerializedName("costItem")
     * @Form\JsonField()
     */
    public $costItem;

    /**
     * CostItemsEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\CostItem|null $costItem
     */
    public function __construct(?CostItem $costItem = null)
    {
        if (null !== $costItem) {
            $this->costItem = $costItem;
        }
    }
}
