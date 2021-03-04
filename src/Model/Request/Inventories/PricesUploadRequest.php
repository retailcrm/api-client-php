<?php

/**
 * PHP version 7.3
 *
 * @category PricesUploadRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */

namespace RetailCrm\Api\Model\Request\Inventories;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class PricesUploadRequest
 *
 * @category PricesUploadRequest
 * @package  RetailCrm\Api\Model\Request\Inventories
 */
class PricesUploadRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Inventories\PriceUploadInput[]
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Inventories\PriceUploadInput[]")
     * @Form\SerializedName("prices")
     */
    public $prices;

    /**
     * PricesUploadRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Inventories\PriceUploadInput[] $prices
     */
    public function __construct(?array $prices = null)
    {
        if (null !== $prices) {
            $this->prices = $prices;
        }
    }
}
