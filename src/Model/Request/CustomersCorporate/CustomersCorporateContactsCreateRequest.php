<?php

/**
 * PHP version 7.3
 *
 * @category CustomersCorporateContactsCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Request\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Model\Request\BySiteRequest;

/**
 * Class CustomersCorporateContactsCreateRequest
 *
 * @category CustomersCorporateContactsCreateRequest
 * @package  RetailCrm\Api\Model\Request\CustomersCorporate
 */
class CustomersCorporateContactsCreateRequest extends BySiteRequest
{
    /**
     * @var \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact")
     * @Form\SerializedName("contact")
     * @Form\JsonField()
     */
    public $contact;
}
