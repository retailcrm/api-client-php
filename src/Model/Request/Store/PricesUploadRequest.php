<?php

/**
 * PHP version 7.3
 *
 * @category PricesUploadRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Request\Store;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class PricesUploadRequest
 *
 * @category PricesUploadRequest
 * @package  RetailCrm\Api\Model\Request\Store
 */
class PricesUploadRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Store\PriceUploadInput[]
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Store\PriceUploadInput[]")
     * @Form\SerializedName("prices")
     * @Form\JsonField()
     */
    public $prices;

    /**
     * PricesUploadRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\Store\PriceUploadInput[] $prices
     */
    public function __construct(?array $prices = null)
    {
        if (null !== $prices) {
            $this->prices = $prices;
        }
    }
}
