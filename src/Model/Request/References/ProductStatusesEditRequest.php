<?php

/**
 * PHP version 7.3
 *
 * @category ProductStatusesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\OrderProductStatus;

/**
 * Class ProductStatusesEditRequest
 *
 * @category ProductStatusesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class ProductStatusesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\OrderProductStatus
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\OrderProductStatus")
     * @Form\SerializedName("productStatus")
     * @Form\JsonField()
     */
    public $productStatus;

    /**
     * ProductStatusesEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\OrderProductStatus|null $productStatus
     */
    public function __construct(?OrderProductStatus $productStatus = null)
    {
        if (null !== $productStatus) {
            $this->productStatus = $productStatus;
        }
    }
}
