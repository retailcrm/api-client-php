<?php

/**
 * PHP version 7.3
 *
 * @category AuthenticatorInterface
 * @package  RetailCrm\Api\Interfaces\Authenticator
 */

namespace RetailCrm\Api\Interfaces;

use Psr\Http\Message\RequestInterface;

/**
 * Interface AuthenticatorInterface
 *
 * @category AuthenticatorInterface
 * @package  RetailCrm\Api\Interfaces\Authenticator
 */
interface AuthenticatorInterface
{
    /**
     * Authenticate provided request
     *
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function authenticate(RequestInterface $request): RequestInterface;
}
