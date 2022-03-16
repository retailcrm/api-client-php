<?php

namespace RetailCrm\Api\Model\Callback\Entity\SimpleConnection\RequestProperty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

class RequestConnectionRegister
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("systemUrl")
     */
    public $systemUrl;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("apiKey")
     */
    public $apiKey;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("token")
     */
    public $token;
}
