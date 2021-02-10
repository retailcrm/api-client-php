<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiSection
 * @package  RetailCrm\Api\Modules
 */

namespace RetailCrm\Api\Section;

use RetailCrm\Api\Component\Authenticator\AuthenticatorInterface;

/**
 * Class AbstractApiSection
 *
 * @category AbstractApiSection
 * @package  RetailCrm\Api\Modules
 */
abstract class AbstractApiSection
{
    /** @var string */
    private $apiUrl;

    /** @var AuthenticatorInterface */
    private $authenticator;

    /**
     * Api constructor.
     *
     * @param string                                                        $apiUrl
     * @param \RetailCrm\Api\Component\Authenticator\AuthenticatorInterface $authenticator
     */
    public function __construct(string $apiUrl, AuthenticatorInterface $authenticator)
    {
        $this->apiUrl = $apiUrl;
        $this->authenticator = $authenticator;
    }

    /**
     * @param string $apiUrl
     *
     * @return AbstractApiSection
     */
    public function setApiUrl(string $apiUrl): AbstractApiSection
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    /**
     * @param \RetailCrm\Api\Component\Authenticator\AuthenticatorInterface $authenticator
     *
     * @return AbstractApiSection
     */
    public function setAuthenticator(AuthenticatorInterface $authenticator): AbstractApiSection
    {
        $this->authenticator = $authenticator;
        return $this;
    }
}
