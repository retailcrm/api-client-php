<?php

/**
 * PHP version 7.3
 *
 * @category SaveResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Response\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class SaveResponse
 *
 * @category SaveResponse
 * @package  RetailCrm\Api\Model\Callback\Response\Delivery
 */
class SaveResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseSave
     *
     * @JMS\Type("RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseSave")
     * @JMS\SerializedName("result")
     */
    public $result;
}
