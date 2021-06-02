<?php

/**
 * PHP version 7.3
 *
 * @category CostGroupsEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\CostGroup;

/**
 * Class CostGroupsEditRequest
 *
 * @category CostGroupsEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class CostGroupsEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\CostGroup
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\CostGroup")
     * @Form\SerializedName("costGroup")
     * @Form\JsonField()
     */
    public $costGroup;

    /**
     * CostGroupsEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\CostGroup|null $costGroup
     */
    public function __construct(?CostGroup $costGroup = null)
    {
        if (null !== $costGroup) {
            $this->costGroup = $costGroup;
        }
    }
}
