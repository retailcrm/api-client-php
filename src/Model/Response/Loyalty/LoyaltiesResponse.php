<?php

/**
 * PHP 7.3
 *
 * @category LoyaltiesResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */

namespace RetailCrm\Api\Model\Response\Loyalty;

use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltiesResponse
 *
 * @category LoyaltiesResponse
 * @package  RetailCrm\Api\Model\Response\Loyalty
 */
class LoyaltiesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\Loyalty[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\Loyalty>")
     * @JMS\SerializedName("loyalties")
     */
    public $loyalties;
}
