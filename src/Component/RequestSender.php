<?php

/**
 * PHP version 7.3
 *
 * @category RequestSender
 * @package  RetailCrm\Api\Component
 */

namespace RetailCrm\Api\Component;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\NetworkExceptionInterface;
use RetailCrm\Api\Interfaces\RequestSenderInterface;
use RetailCrm\Api\ResourceGroup\AbstractApiResourceGroup;
use RetailCrm\Api\Traits\BaseUrlAwareTrait;

/**
 * Class RequestSender
 *
 * @category RequestSender
 * @package  RetailCrm\Api\Component
 */
class RequestSender extends AbstractApiResourceGroup implements RequestSenderInterface
{
    use BaseUrlAwareTrait {
        route as private makeRoute;
    }

    /**
     * @param \RetailCrm\Api\ResourceGroup\AbstractApiResourceGroup $resourceGroup
     */
    public function __construct(AbstractApiResourceGroup $resourceGroup)
    {
        parent::__construct(
            $resourceGroup->baseUrl,
            $resourceGroup->httpClient,
            $resourceGroup->requestTransformer,
            $resourceGroup->responseTransformer,
            $resourceGroup->eventDispatcher,
            $resourceGroup->logger
        );
    }

    /**
     * Sends custom request to provided route with provided method and body, returns array response.
     * Request will be put into GET parameters or into POST form-data (depends on method).
     *
     * Note: do not remove "useless" exceptions which are marked as "never thrown" by IDE.
     * PSR-18's ClientInterface doesn't have them in the DocBlock, but, according to PSR-18,
     * they can be thrown by clients, and therefore should be present here.
     *
     * @see https://www.php-fig.org/psr/psr-18/#error-handling
     *
     * @param string                   $method
     * @param string                   $route
     * @param array<int|string, mixed> $requestForm
     *
     * @return array<int|string, mixed>
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\ClientException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @SuppressWarnings(PHPMD.ElseExpression)
     */
    public function send(
        string $method,
        string $route,
        array $requestForm = []
    ): array {
        $method = strtoupper($method);
        $psrRequest = $this->requestTransformer->createCustomPsrRequest($method, $route, $requestForm);

        $this->logPsr7Request($psrRequest);

        try {
            $psrResponse = $this->httpClient->sendRequest($psrRequest);
        } catch (ClientExceptionInterface | NetworkExceptionInterface $exception) {
            $this->processPsr18Exception($psrRequest, $exception);
        }

        if (isset($psrResponse)) {
            $this->logPsr7Response($psrResponse);
        } else {
            return [];
        }

        return $this->responseTransformer->createCustomResponse($this->baseUrl, $psrRequest, $psrResponse);
    }

    /**
     * @inheritDoc
     */
    public function route(string $route): string
    {
        return $this->makeRoute($route);
    }

    /**
     * @inheritDoc
     */
    public function host(): string
    {
        return (string) parse_url($this->baseUrl, PHP_URL_HOST);
    }
}
