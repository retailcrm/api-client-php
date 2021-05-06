<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiResourceGroup
 * @package  RetailCrm\Api\Modules
 */

namespace RetailCrm\Api\ResourceGroup;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Client\NetworkExceptionInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Event\FailureRequestEvent;
use RetailCrm\Api\Exception\Client\HttpClientException;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Interfaces\RequestTransformerInterface;
use RetailCrm\Api\Interfaces\ResponseInterface;
use RetailCrm\Api\Interfaces\ResponseTransformerInterface;
use RetailCrm\Api\Traits\EventDispatcherAwareTrait;

/**
 * Class AbstractApiResourceGroup
 *
 * @category AbstractApiResourceGroup
 * @package  RetailCrm\Api\Modules
 * @internal
 *
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
abstract class AbstractApiResourceGroup
{
    use EventDispatcherAwareTrait;

    /** @var string */
    protected $baseUrl;

    /** @var ClientInterface */
    protected $httpClient;

    /** @var \RetailCrm\Api\Interfaces\RequestTransformerInterface */
    protected $requestTransformer;

    /** @var \RetailCrm\Api\Interfaces\ResponseTransformerInterface */
    protected $responseTransformer;

    /** @var \Psr\Log\LoggerInterface|null */
    protected $logger;

    /**
     * AbstractApiResourceGroup constructor.
     *
     * @param string                                                 $baseUrl
     * @param \Psr\Http\Client\ClientInterface                       $httpClient
     * @param \RetailCrm\Api\Interfaces\RequestTransformerInterface  $requestTransformer
     * @param \RetailCrm\Api\Interfaces\ResponseTransformerInterface $responseTransformer
     * @param \Psr\EventDispatcher\EventDispatcherInterface|null     $eventDispatcher
     * @param \Psr\Log\LoggerInterface|null                          $logger
     */
    public function __construct(
        string $baseUrl,
        ClientInterface $httpClient,
        RequestTransformerInterface $requestTransformer,
        ResponseTransformerInterface $responseTransformer,
        ?EventDispatcherInterface $eventDispatcher = null,
        ?LoggerInterface $logger = null
    ) {
        $this->baseUrl             = $baseUrl;
        $this->httpClient          = $httpClient;
        $this->requestTransformer  = $requestTransformer;
        $this->responseTransformer = $responseTransformer;
        $this->eventDispatcher     = $eventDispatcher;
        $this->logger              = $logger;
    }

    /**
     * Sends request to provided route with provided method and body, returns response of provided type.
     * Request will be put into GET parameters or into POST form-data (depends on method).
     *
     * Note: do not remove "useless" exceptions which are marked as "never thrown" by IDE.
     * PSR-18's ClientInterface doesn't have them in the DocBlock, but, according to PSR-18,
     * they can be thrown by clients, and therefore should be present here.
     *
     * @see https://www.php-fig.org/psr/psr-18/#error-handling
     *
     * @param string                                          $method
     * @param string                                          $route
     * @param \RetailCrm\Api\Interfaces\RequestInterface|null $request
     * @param string                                          $type
     *
     * @return \RetailCrm\Api\Interfaces\ResponseInterface
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    protected function sendRequest(
        string $method,
        string $route,
        ?RequestInterface $request,
        string $type
    ): ResponseInterface {
        $method     = strtoupper($method);
        $psrRequest = $this->requestTransformer->createPsrRequest(
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

        try {
            $psrResponse = $this->httpClient->sendRequest($psrRequest);
        } catch (ClientExceptionInterface | NetworkExceptionInterface $exception) {
            $clientException = new HttpClientException(
                sprintf('HTTP client error: %s', $exception->getMessage()),
                $exception->getCode(),
                $exception
            );

            $this->dispatch(new FailureRequestEvent($this->baseUrl, $psrRequest, null, $clientException));

            throw $clientException;
        }

        if ($this->logger instanceof LoggerInterface && !($this->logger instanceof NullLogger)) {
            $this->logger->debug(sprintf(
                '[RetailCRM API Response]: Status: "%d", Body: "%s"',
                $psrResponse->getStatusCode(),
                Utils::getBodyContents($psrResponse->getBody())
            ));
        }

        return $this->responseTransformer->createResponse($this->baseUrl, $psrRequest, $psrResponse, $type);
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
}
