<?php

/**
 * PHP version 7.3
 *
 * @category StatusesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\Status;

/**
 * Class StatusesEditRequest
 *
 * @category StatusesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class StatusesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\Status
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\Status")
     * @Form\SerializedName("status")
     * @Form\JsonField()
     */
    public $status;

    /**
     * StatusesEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\Status|null $status
     */
    public function __construct(?Status $status = null)
    {
        if (null !== $status) {
            $this->status = $status;
        }
    }
}
