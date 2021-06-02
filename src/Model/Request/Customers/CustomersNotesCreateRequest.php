<?php

/**
 * PHP version 7.3
 *
 * @category CustomersNotesCreateRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */

namespace RetailCrm\Api\Model\Request\Customers;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class CustomersNotesCreateRequest
 *
 * @category CustomersNotesCreateRequest
 * @package  RetailCrm\Api\Model\Request\Customers
 */
class CustomersNotesCreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * @var \RetailCrm\Api\Model\Entity\Customers\CustomerNote
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Customers\CustomerNote")
     * @Form\SerializedName("note")
     * @Form\JsonField()
     */
    public $note;
}
