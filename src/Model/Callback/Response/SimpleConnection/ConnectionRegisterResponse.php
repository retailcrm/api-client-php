<?php

namespace RetailCrm\Api\Model\Callback\Response\SimpleConnection;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

class ConnectionRegisterResponse
{
    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("success")
     */
    public $success;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("accountUrl")
     */
    public $accountUrl;
}
