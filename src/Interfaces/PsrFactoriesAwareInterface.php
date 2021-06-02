<?php

/**
 * PHP version 7.3
 *
 * @category PsrFactoriesAwareInterface
 * @package  RetailCrm\Api\Interfaces
 */

namespace RetailCrm\Api\Interfaces;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

/**
 * Interface PsrFactoriesAwareInterface
 *
 * @category PsrFactoriesAwareInterface
 * @package  RetailCrm\Api\Interfaces
 */
interface PsrFactoriesAwareInterface
{
    /**
     * @param \Psr\Http\Message\UriFactoryInterface $uriFactory
     */
    public function setUriFactory(UriFactoryInterface $uriFactory); // @phpstan-ignore-line

    /**
     * @param \Psr\Http\Message\RequestFactoryInterface $requestFactory
     */
    public function setRequestFactory(RequestFactoryInterface $requestFactory); // @phpstan-ignore-line

    /**
     * @param \Psr\Http\Message\StreamFactoryInterface $streamFactory
     */
    public function setStreamFactory(StreamFactoryInterface $streamFactory); // @phpstan-ignore-line
}
