<?php

/**
 * PHP version 7.3
 *
 * @category ClientIdUploadRequest
 * @package  RetailCrm\Api\Model\Request\WebAnalytics
 */

namespace RetailCrm\Api\Model\Request\WebAnalytics;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class ClientIdUploadRequest
 *
 * @category ClientIdUploadRequest
 * @package  RetailCrm\Api\Model\Request\WebAnalytics
 */
class ClientIdUploadRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\WebAnalytics\ClientId[]
     *
     * @Form\Type("array<RetailCrm\Api\Model\Entity\WebAnalytics\ClientId>")
     * @Form\SerializedName("clientIds")
     * @Form\JsonField()
     */
    public $clientIds;

    /**
     * ClientIdUploadRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\WebAnalytics\ClientId[]|null $clientIds
     */
    public function __construct(?array $clientIds = null)
    {
        if (null !== $clientIds) {
            $this->clientIds = $clientIds;
        }
    }
}
