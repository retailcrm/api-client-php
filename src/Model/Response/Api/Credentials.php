<?php

/**
 * PHP version 7.3
 *
 * @category Credentials
 * @package  RetailCrm\Api\Model\Response\Api
 */

namespace RetailCrm\Api\Model\Response\Api;

use JMS\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class Credentials
 *
 * @category Credentials
 * @package  RetailCrm\Api\Model\Response\Api
 */
class Credentials extends SuccessResponse
{
    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("credentials")
     */
    public $credentials;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("siteAccess")
     */
    public $siteAccess;

    /**
     * @var string[]
     *
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("sitesAvailable")
     */
    public $sitesAvailable;
}
