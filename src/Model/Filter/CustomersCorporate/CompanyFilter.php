<?php

/**
 * PHP version 7.3
 *
 * @category CompanyFilter
 * @package  RetailCrm\Api\Model\Filter\CustomersCorporate
 */

namespace RetailCrm\Api\Model\Filter\CustomersCorporate;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class CompanyFilter
 *
 * @category CompanyFilter
 * @package  RetailCrm\Api\Model\Filter\CustomersCorporate
 */
class CompanyFilter
{
    /**
     * @var int[]
     *
     * @Form\Type("int[]")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string[]
     *
     * @Form\Type("string[]")
     * @Form\SerializedName("externalIds")
     */
    public $externalIds;
}
