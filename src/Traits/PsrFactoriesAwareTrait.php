<?php

/**
 * PHP version 7.3
 *
 * @category PsrFactoriesAwareTrait
 * @package  RetailCrm\Api\Traits
 */

namespace RetailCrm\Api\Traits;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

/**
 * Trait PsrFactoriesAwareTrait
 *
 * @category PsrFactoriesAwareTrait
 * @package  RetailCrm\Api\Traits
 */
trait PsrFactoriesAwareTrait
{
    /** @var \Psr\Http\Message\UriFactoryInterface $uriFactory */
    protected $uriFactory;

    /** @var \Psr\Http\Message\RequestFactoryInterface $requestFactory */
    protected $requestFactory;

    /** @var \Psr\Http\Message\StreamFactoryInterface */
    protected $streamFactory;

    /**
     * @param \Psr\Http\Message\UriFactoryInterface $uriFactory
     *
     * @return self
     */
    public function setUriFactory(UriFactoryInterface $uriFactory): self
    {
        $this->uriFactory = $uriFactory;
        return $this;
    }

    /**
     * @param \Psr\Http\Message\RequestFactoryInterface $requestFactory
     *
     * @return self
     */
    public function setRequestFactory(RequestFactoryInterface $requestFactory): self
    {
        $this->requestFactory = $requestFactory;
        return $this;
    }

    /**
     * @param \Psr\Http\Message\StreamFactoryInterface $streamFactory
     *
     * @return self
     */
    public function setStreamFactory(StreamFactoryInterface $streamFactory): self
    {
        $this->streamFactory = $streamFactory;
        return $this;
    }
}
