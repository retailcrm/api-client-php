<?php

/**
 * PHP version 7.3
 *
 * @category ClientBuilder
 * @package  RetailCrm\Api\Builder
 */

namespace RetailCrm\Api\Builder;

use InvalidArgumentException;
use RetailCrm\Api\Client;
use RetailCrm\Api\Component\Authenticator\AuthenticatorInterface;
use RetailCrm\Api\Component\Authenticator\HeaderAuthenticator;

/**
 * Class ClientBuilder
 *
 * @category ClientBuilder
 * @package  RetailCrm\Api\Builder
 */
class ClientBuilder implements BuilderInterface
{
    /** @var string */
    private $apiUrl;

    /** @var string */
    private $apiKey;

    /** @var AuthenticatorInterface */
    private $authenticator;

    /**
     * @param string $apiUrl
     *
     * @return ClientBuilder
     */
    public function setApiUrl(string $apiUrl): ClientBuilder
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    /**
     * @param string $apiKey
     *
     * @return ClientBuilder
     */
    public function setApiKey(string $apiKey): ClientBuilder
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @param \RetailCrm\Api\Component\Authenticator\AuthenticatorInterface $authenticator
     *
     * @return ClientBuilder
     */
    public function setAuthenticator(AuthenticatorInterface $authenticator): ClientBuilder
    {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function build(): Client
    {
        if (empty($this->apiUrl)) {
            throw new InvalidArgumentException("apiUrl must not be empty");
        }

        if (empty($this->apiKey) && empty($this->authenticator)) {
            throw new InvalidArgumentException("Either apiKey or authenticator must be present");
        }

        if (!empty($this->apiKey)) {
            $this->authenticator = new HeaderAuthenticator($this->apiKey);
        }

        return new Client($this->apiUrl, $this->authenticator);
    }
}
