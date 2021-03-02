<?php

/**
 * PHP version 7.3
 *
 * @category OrdersLinksCreateRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */

namespace RetailCrm\Api\Model\Request\Orders;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class OrdersLinksCreateRequest
 *
 * @category OrdersLinksCreateRequest
 * @package  RetailCrm\Api\Model\Request\Orders
 */
class OrdersLinksCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\SerializedOrderLink
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Orders\SerializedOrderLink")
     * @Form\SerializedName("link")
     * @Form\JsonField()
     */
    public $link;
}
