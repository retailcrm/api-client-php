<?php

namespace RetailCrm\Api\Model\Callback\Entity\SimpleConnection\ResponseProperty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

class ResponseConnectionConfig
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
