<?php

/**
 * PHP version 7.3
 *
 * @category CouriersCreateRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\Courier;

/**
 * Class CouriersCreateRequest
 *
 * @category CouriersCreateRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class CouriersCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\Courier
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\Courier")
     * @Form\SerializedName("courier")
     * @Form\JsonField()
     */
    public $courier;

    /**
     * CouriersCreateRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\Courier|null $courier
     */
    public function __construct(?Courier $courier = null)
    {
        if (null !== $courier) {
            $this->courier = $courier;
        }
    }
}
