<?php

/**
 * PHP version 7.3
 *
 * @category AbstractRequestEvent
 * @package  RetailCrm\Api\Event
 */

namespace RetailCrm\Api\Event;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class AbstractRequestEvent
 *
 * @category AbstractRequestEvent
 * @package  RetailCrm\Api\Event
 */
abstract class AbstractRequestEvent
{
    /** @var string */
    private $requestScheme;

    /** @var string */
    private $crmDomain;

    /** @var string */
    private $apiKey;

    /** @var RequestInterface */
    private $request;

    /** @var \Psr\Http\Message\ResponseInterface|null */
    private $response;

    /** @var array<int|string, mixed> */
    private $responseArray;

    /**
     * AbstractRequestEvent constructor.
     *
     * @param string                                   $baseUrl
     * @param \Psr\Http\Message\RequestInterface       $request
     * @param \Psr\Http\Message\ResponseInterface|null $response
     * @param array<int|string, mixed>                 $responseArray
     */
    public function __construct(
        string $baseUrl,
        RequestInterface $request,
        ?ResponseInterface $response,
        array $responseArray = []
    ) {
        $this->requestScheme = (string) parse_url($baseUrl, PHP_URL_SCHEME);
        $this->crmDomain = (string) parse_url($baseUrl, PHP_URL_HOST);
        $this->request = $request;
        $this->response = $response;
        $this->responseArray = $responseArray;
    }

    /**
     * Returns a request for which an event was thrown.
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    /**
     * Returns a response for which an event was thrown.
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }

    /**
     * Returns a response array. It will be present only if custom request was used.
     *
     * @return array<int|string, mixed>
     */
    public function getResponseArray(): array
    {
        return $this->responseArray;
    }

    /**
     * Returns RetailCRM domain for request.
     *
     * @return string
     */
    public function getApiDomain(): string
    {
        return $this->crmDomain;
    }

    /**
     * Returns RetailCRM URL for request in the event without trailing slash.
     *
     * @return string
     */
    public function getApiUrl(): string
    {
        return sprintf('%s://%s', $this->requestScheme, $this->crmDomain);
    }

    /**
     * Returns API key for request in the event.
     *
     * @return string
     */
    public function getApiKey(): string
    {
        if (empty($this->apiKey)) {
            $uri = $this->request->getUri();

            if ('' !== $this->request->getHeaderLine('X-Api-Key')) {
                $this->apiKey = $this->request->getHeaderLine('X-Api-Key');
            } elseif ('' !== $uri->getQuery()) {
                $params = [];
                parse_str($uri->getQuery(), $params);

                if (array_key_exists('apiKey', $params)) {
                    $this->apiKey = $params['apiKey'];
                }
            }
        }

        return $this->apiKey;
    }
}
