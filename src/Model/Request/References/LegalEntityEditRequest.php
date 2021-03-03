<?php

/**
 * PHP version 7.3
 *
 * @category LegalEntityEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\LegalEntity;

/**
 * Class LegalEntityEditRequest
 *
 * @category LegalEntityEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class LegalEntityEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\LegalEntity
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\LegalEntity")
     * @Form\SerializedName("legalEntity")
     * @Form\JsonField()
     */
    public $legalEntity;

    /**
     * LegalEntityEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\LegalEntity|null $legalEntity
     */
    public function __construct(?LegalEntity $legalEntity = null)
    {
        if (null !== $legalEntity) {
            $this->legalEntity = $legalEntity;
        }
    }
}
