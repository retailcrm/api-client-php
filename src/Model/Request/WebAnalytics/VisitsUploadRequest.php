<?php

/**
 * @category VisitsUploadRequest
 * @package  RetailCrm\Api\Model\Request\WebAnalytics
 */

namespace RetailCrm\Api\Model\Request\WebAnalytics;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class VisitsUploadRequest
 *
 * @category VisitsUploadRequest
 * @package  RetailCrm\Api\Model\Request\WebAnalytics
 */
class VisitsUploadRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\WebAnalytics\Visit[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\WebAnalytics\Visit>")
     * @Form\SerializedName("visits")
     * @Form\JsonField()
     */
    public $visits;

    /**
     * VisitsUploadRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\WebAnalytics\Visit[]|null $visits
     */
    public function __construct(?array $visits = null)
    {
        if (null !== $visits) {
            $this->visits = $visits;
        }
    }
}
