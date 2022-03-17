<?php

namespace RetailCrm\Api\Model\Callback\Response\SimpleConnection;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

class ConnectionConfigResponse
{
    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("success")
     */
    public $success;

    /**
     * @var string[]
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("scopes")
     */
    public $scopes;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("registerUrl")
     */
    public $registerUrl;
}
