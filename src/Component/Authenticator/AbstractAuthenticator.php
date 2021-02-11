<?php

/**
 * PHP version 7.3
 *
 * @category AbstractAuthenticator
 * @package  RetailCrm\Api\Component\Authenticator
 */

namespace RetailCrm\Api\Component\Authenticator;

use Psr\Http\Message\RequestInterface;
use RetailCrm\Api\Interfaces\AuthenticatorInterface;

/**
 * Class AbstractAuthenticator
 *
 * @category AbstractAuthenticator
 * @package  RetailCrm\Api\Component\Authenticator
 */
abstract class AbstractAuthenticator implements AuthenticatorInterface
{
    /** @var string */
    protected $apiKey;

    /**
     * AbstractAuthenticator constructor.
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @inheritDoc
     */
    abstract public function authenticate(RequestInterface $request): RequestInterface;
}
