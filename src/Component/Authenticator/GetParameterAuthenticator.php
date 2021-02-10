<?php

/**
 * PHP version 7.3
 *
 * @category GetParameterAuthenticator
 * @package  RetailCrm\Api\Component\Authenticator
 */

namespace RetailCrm\Api\Component\Authenticator;

use Psr\Http\Message\RequestInterface;

/**
 * Class GetParameterAuthenticator
 *
 * @category GetParameterAuthenticator
 * @package  RetailCrm\Api\Component\Authenticator
 */
class GetParameterAuthenticator extends AbstractAuthenticator
{
    /**
     * Returns RequestInterface with injected `apiKey` get parameter.
     *
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function authenticate(RequestInterface $request): RequestInterface
    {
        $params = [];
        $uri    = $request->getUri();
        parse_str($uri->getQuery(), $params);

        $params['apiKey'] = $this->apiKey;

        return $request->withUri($uri->withQuery(http_build_query($params)), true);
    }
}
