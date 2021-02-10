<?php

/**
 * PHP version 7.3
 *
 * @category HeaderAuthenticator
 * @package  RetailCrm\Api\Component\Authenticator
 */

namespace RetailCrm\Api\Component\Authenticator;

use Psr\Http\Message\RequestInterface;

/**
 * Class HeaderAuthenticator
 *
 * @category HeaderAuthenticator
 * @package  RetailCrm\Api\Component\Authenticator
 */
class HeaderAuthenticator extends AbstractAuthenticator
{
    /**
     * Returns RequestInterface with injected `apiKey` header.
     *
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function authenticate(RequestInterface $request): RequestInterface
    {
        return $request->withAddedHeader('x-api-key', $this->apiKey);
    }
}
