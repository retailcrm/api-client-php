<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiResourceGroup
 * @package  RetailCrm\Api\Modules
 */

namespace RetailCrm\Api\ResourceGroup;

use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use RetailCrm\Api\Component\Transformer\RequestTransformer;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Interfaces\ResponseInterface;

/**
 * Class AbstractApiResourceGroup
 *
 * @category AbstractApiResourceGroup
 * @package  RetailCrm\Api\Modules
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
abstract class AbstractApiResourceGroup
{
    /** @var string */
    protected $baseUrl;

    /** @var ClientInterface */
    protected $httpClient;

    /** @var RequestTransformer */
    protected $requestTransformer;

    /** @var ResponseTransformer */
    protected $responseTransformer;

    /** @var ?\Psr\Log\LoggerInterface */
    protected $logger;

    /**
     * AbstractApiResourceGroup constructor.
     *
     * @param string                                                   $baseUrl
     * @param \Psr\Http\Client\ClientInterface                         $httpClient
     * @param \RetailCrm\Api\Component\Transformer\RequestTransformer  $requestTransformer
     * @param \RetailCrm\Api\Component\Transformer\ResponseTransformer $responseTransformer
     * @param \Psr\Log\LoggerInterface|null                            $logger
     */
    public function __construct(
        string $baseUrl,
        ClientInterface $httpClient,
        RequestTransformer $requestTransformer,
        ResponseTransformer $responseTransformer,
        ?LoggerInterface $logger = null
    ) {
        $this->baseUrl             = $baseUrl;
        $this->httpClient          = $httpClient;
        $this->requestTransformer  = $requestTransformer;
        $this->responseTransformer = $responseTransformer;
        $this->logger              = $logger;
    }

    /**
     * @param string $baseUrl
     *
     * @return AbstractApiResourceGroup
     */
    public function setBaseUrl(string $baseUrl): AbstractApiResourceGroup
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * Returns route with base URI.
     *
     * @param string $route
     *
     * @return string
     */
    protected function route(string $route): string
    {
        return sprintf('%s/%s', $this->baseUrl, $route);
    }

    /**
     * Sends request to provided route with provided method and body, returns response of provided type.
     * Request will be put into GET parameters or into POST form-data (depends on method).
     *
     * @param string                                          $method
     * @param string                                          $route
     * @param \RetailCrm\Api\Interfaces\RequestInterface|null $request
     * @param string                                          $type
     *
     * @return \RetailCrm\Api\Interfaces\ResponseInterface
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\HandlerException
     */
    protected function sendRequest(
        string $method,
        string $route,
        ?RequestInterface $request,
        string $type
    ): ResponseInterface {
        $method = strtoupper($method);
        $psrRequest  = $this->requestTransformer->createPsrRequest(
            $method,
            $this->route($route),
            $request
        );

        if ($this->logger instanceof LoggerInterface && !($this->logger instanceof NullLogger)) {
            $this->logger->debug(sprintf(
                '[RetailCRM API Request]: %s URL: "%s", Headers: "%s", Body: "%s"',
                $psrRequest->getMethod(),
                (string) $psrRequest->getUri(),
                json_encode($psrRequest->getHeaders()),
                Utils::getBodyContents($psrRequest->getBody())
            ));
        }

        $psrResponse = $this->httpClient->sendRequest($psrRequest);

        if ($this->logger instanceof LoggerInterface && !($this->logger instanceof NullLogger)) {
            $this->logger->debug(sprintf(
                '[RetailCRM API Response]: Status: "%d", Body: "%s"',
                $psrResponse->getStatusCode(),
                Utils::getBodyContents($psrResponse->getBody())
            ));
        }

        return $this->responseTransformer->createResponse($method, $psrResponse, $type);
    }
}
