<?php

namespace RetailCrm\Api\Model\Callback\Entity\SimpleConnection\ResponseProperty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

class ResponseConnectionRegister
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
