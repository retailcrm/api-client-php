<?php

/**
 * PHP version 7.3
 *
 * @category StoresEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\Store;

/**
 * Class StoresEditRequest
 *
 * @category StoresEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class StoresEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\Store
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\Store")
     * @Form\SerializedName("store")
     * @Form\JsonField()
     */
    public $store;

    /**
     * StoresEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\Store|null $store
     */
    public function __construct(?Store $store = null)
    {
        if (null !== $store) {
            $this->store = $store;
        }
    }
}
