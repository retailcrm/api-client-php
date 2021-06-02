<?php

/**
 * PHP version 7.3
 *
 * @category CustomerContactFilter
 * @package  RetailCrm\Api\Model\Filter\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Filter\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CustomerContactFilter
 *
 * @category CustomerContactFilter
 * @package  RetailCrm\Api\Model\Filter\CustomersCorporate
 */
class CustomerContactFilter
{
    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("contactIds")
     */
    public $contactIds;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("contactExternalIds")
     */
    public $contactExternalIds;
}
