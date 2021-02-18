<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateUploadRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersCorporateUploadRequest
 *
 * @category CustomersCorporateUploadRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateUploadRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate>")
     * @Form\SerializedName("customersCorporate")
     * @Form\JsonField()
     */
    public $customersCorporate;
}
