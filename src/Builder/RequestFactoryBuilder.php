<?php

/**
 * PHP version 7.3
 *
 * @category RequestFactoryBuilder
 * @package  RetailCrm\Api\Builder
 */

namespace RetailCrm\Api\Builder;

use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use RetailCrm\Api\Component\Authenticator\AuthenticatorInterface;
use RetailCrm\Api\Exception\BuilderException;
use RetailCrm\Api\Component\FormData\FormEncoder;
use RetailCrm\Api\Factory\RequestFactory;

/**
 * Class RequestFactoryBuilder
 *
 * @category RequestFactoryBuilder
 * @package  RetailCrm\Api\Builder
 */
class RequestFactoryBuilder implements BuilderInterface
{
    /**
     * @var ?StreamFactoryInterface $streamFactory
     */
    private $streamFactory;

    /**
     * @var ?\Psr\Http\Message\RequestFactoryInterface $requestFactory
     */
    private $requestFactory;

    /**
     * @var ?\Psr\Http\Message\UriFactoryInterface $uriFactory
     */
    private $uriFactory;

    /**
     * @var ?AuthenticatorInterface
     */
    private $authenticator;

    /**
     * @var \RetailCrm\Api\Component\FormData\FormEncoder
     */
    private $formEncoder;

    /**
     * @param \Psr\Http\Message\StreamFactoryInterface $streamFactory
     *
     * @return RequestFactoryBuilder
     */
    public function setStreamFactory(StreamFactoryInterface $streamFactory): RequestFactoryBuilder
    {
        $this->streamFactory = $streamFactory;
        return $this;
    }

    /**
     * @param \Psr\Http\Message\RequestFactoryInterface $requestFactory
     *
     * @return RequestFactoryBuilder
     */
    public function setRequestFactory(RequestFactoryInterface $requestFactory): RequestFactoryBuilder
    {
        $this->requestFactory = $requestFactory;
        return $this;
    }

    /**
     * @param \Psr\Http\Message\UriFactoryInterface $uriFactory
     *
     * @return RequestFactoryBuilder
     */
    public function setUriFactory(UriFactoryInterface $uriFactory): RequestFactoryBuilder
    {
        $this->uriFactory = $uriFactory;
        return $this;
    }

    /**
     * @param \RetailCrm\Api\Component\Authenticator\AuthenticatorInterface $authenticator
     *
     * @return RequestFactoryBuilder
     */
    public function setAuthenticator(AuthenticatorInterface $authenticator): RequestFactoryBuilder
    {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * @param \RetailCrm\Api\Component\FormData\FormEncoder $formEncoder
     *
     * @return RequestFactoryBuilder
     */
    public function setFormEncoder(FormEncoder $formEncoder): RequestFactoryBuilder
    {
        $this->formEncoder = $formEncoder;
        return $this;
    }

    /**
     * @inheritDoc
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function build(): RequestFactory
    {
        if (null === $this->authenticator) {
            throw new BuilderException('Authenticator must be set.', ['authenticator']);
        }

        return new RequestFactory(
            $this->streamFactory ?: Psr17FactoryDiscovery::findStreamFactory(),
            $this->requestFactory ?: Psr17FactoryDiscovery::findRequestFactory(),
            $this->uriFactory ?: Psr17FactoryDiscovery::findUriFactory(),
            $this->authenticator,
            $this->formEncoder,
        );
    }
}
