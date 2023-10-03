<?php

/**
 * PHP version 7.3
 *
 * @category CurrenciesCreateRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\Currency;

/**
 * Class CurrenciesCreateRequest
 *
 * @category CurrenciesCreateRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class CurrenciesCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\Currency|null
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\Currency")
     * @Form\SerializedName("currency")
     * @Form\JsonField()
     */
    public $currency;

    /**
     * CurrenciesCreateRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\Currency|null $currency
     */
    public function __construct(?Currency $currency = null)
    {
        if (null !== $this->currency) {
            $this->currency = $currency;
        }
    }
}
