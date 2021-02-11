<?php

/**
 * PHP version 7.3
 *
 * @category RequestFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface as PsrRequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use ReflectionException;
use RetailCrm\Api\Component\FormData\FormEncoder;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Exception\FactoryException;
use RetailCrm\Api\Interfaces\AuthenticatorInterface;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class RequestFactory
 *
 * @category RequestFactory
 * @package  RetailCrm\Api\Factory
 */
class RequestFactory
{
    /**
     * @var StreamFactoryInterface $streamFactory
     */
    private $streamFactory;

    /**
     * @var \Psr\Http\Message\RequestFactoryInterface $requestFactory
     */
    private $requestFactory;

    /**
     * @var \Psr\Http\Message\UriFactoryInterface $uriFactory
     */
    private $uriFactory;

    /**
     * @var AuthenticatorInterface
     */
    private $authenticator;

    /**
     * @var \RetailCrm\Api\Component\FormData\FormEncoder
     */
    private $formEncoder;

    /**
     * RequestFactory constructor.
     *
     * @param \Psr\Http\Message\StreamFactoryInterface           $streamFactory
     * @param \Psr\Http\Message\RequestFactoryInterface          $requestFactory
     * @param \Psr\Http\Message\UriFactoryInterface              $uriFactory
     * @param \RetailCrm\Api\Interfaces\AuthenticatorInterface   $authenticator
     * @param \RetailCrm\Api\Component\FormData\FormEncoder|null $formEncoder
     */
    public function __construct(
        StreamFactoryInterface $streamFactory,
        RequestFactoryInterface $requestFactory,
        UriFactoryInterface $uriFactory,
        AuthenticatorInterface $authenticator,
        ?FormEncoder $formEncoder
    ) {
        $this->streamFactory  = $streamFactory;
        $this->requestFactory = $requestFactory;
        $this->uriFactory     = $uriFactory;
        $this->authenticator  = $authenticator;
        $this->formEncoder    = $formEncoder ?: new FormEncoder();
    }

    /**
     * @param string                                          $method
     * @param string                                          $uri
     * @param \RetailCrm\Api\Interfaces\RequestInterface|null $request
     *
     * @return \Psr\Http\Message\RequestInterface
     * @throws \RetailCrm\Api\Exception\FactoryException
     */
    public function createPsrRequest(
        string $method,
        string $uri,
        ?RequestInterface $request = null
    ): PsrRequestInterface {
        $formData = '';
        $method = strtoupper($method);
        $uriData = $this->uriFactory->createUri($uri);
        $psrRequest = $this->requestFactory->createRequest($method, $uriData);

        if (null !== $request) {
            try {
                $formData = $this->formEncoder->encode($request);
            } catch (ReflectionException $exception) {
                throw new FactoryException(
                    sprintf('Cannot marshal request into form-data: %s', $exception->getMessage()),
                    0,
                    $exception
                );
            }
        }

        if (RequestMethod::GET === $method || RequestMethod::DELETE === $method) {
            return $this->authenticator->authenticate(
                $psrRequest->withUri(
                    $uriData->withQuery($formData)
                )
            );
        }

        return $this->authenticator->authenticate(
            $psrRequest->withBody(
                $this->streamFactory->createStream($formData)
            )
        );
    }

    /**
     * @return \RetailCrm\Api\Interfaces\AuthenticatorInterface
     */
    public function getAuthenticator(): AuthenticatorInterface
    {
        return $this->authenticator;
    }
}
