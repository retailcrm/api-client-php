<?php

/**
 * PHP version 7.3
 *
 * @category Client
 * @package  RetailCrm\Api
 */

namespace RetailCrm\Api;

use RetailCrm\Api\Component\Authenticator\AuthenticatorInterface;
use RetailCrm\Api\Section\Api;

/**
 * Class Client
 *
 * @category Client
 * @package  RetailCrm\Api
 */
class Client
{
    /** @var \RetailCrm\Api\Section\Api */
    public $api;

    /**
     * Client constructor.
     *
     * @param string                                                        $apiUrl
     * @param \RetailCrm\Api\Component\Authenticator\AuthenticatorInterface $authenticator
     */
    public function __construct(string $apiUrl, AuthenticatorInterface $authenticator)
    {
        $this->api = new Api($apiUrl, $authenticator);
    }
}
