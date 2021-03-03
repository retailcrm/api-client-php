<?php

/**
 * PHP version 7.3
 *
 * @category StatusesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class StatusesResponse
 *
 * @category StatusesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */
class StatusesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\Status[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\Status>")
     * @JMS\SerializedName("statuses")
     */
    public $statuses;
}
