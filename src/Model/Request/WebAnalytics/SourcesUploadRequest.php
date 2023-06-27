<?php

/**
 * PHP version 7.3
 *
 * @category SourcesUploadRequest
 * @package  RetailCrm\Api\Model\Request\WebAnalytics
 */

namespace RetailCrm\Api\Model\Request\WebAnalytics;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class SourcesUploadRequest
 *
 * @category SourcesUploadRequest
 * @package  RetailCrm\Api\Model\Request\WebAnalytics
 */
class SourcesUploadRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\WebAnalytics\Source[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\WebAnalytics\Source>")
     * @Form\SerializedName("sources")
     * @Form\JsonField()
     */
    public $sources;

    /**
     * SourcesUploadRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\WebAnalytics\Source[]|null $sources
     */
    public function __construct(?array $sources = null)
    {
        if (null !== $sources) {
            $this->sources = $sources;
        }
    }
}
