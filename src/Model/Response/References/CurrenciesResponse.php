<?php

/**
 * PHP version 7.3
 *
 * @category CurrenciesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

namespace RetailCrm\Api\Model\Response\References;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CurrenciesResponse
 *
 * @category CurrenciesResponse
 * @package  RetailCrm\Api\Model\Response\References
 */

class CurrenciesResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\Currency[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\References\Currency>")
     * @JMS\SerializedName("currencies")
     */
    public $currencies;
}
