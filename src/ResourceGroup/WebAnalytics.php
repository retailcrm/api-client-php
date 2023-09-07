<?php

/**
 * PHP version 7.3
 *
 * @category WebAnalytics
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\WebAnalytics\ClientIdUploadRequest;
use RetailCrm\Api\Model\Request\WebAnalytics\SourcesUploadRequest;
use RetailCrm\Api\Model\Response\WebAnalytics\ClientIdUploadResponse;
use RetailCrm\Api\Model\Response\WebAnalytics\SourcesUploadResponse;

//    TODO комментарий + тест
/**
 * Class WebAnalytics
 *
 * @category WebAnalytics
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class WebAnalytics extends AbstractApiResourceGroup
{
    /**
     *
     *   Makes POST "/api/v5/web-analytics/client-ids/upload" request.
     *
     *   Example:
     *   ```php
     *   use RetailCrm\Api\Factory\SimpleClientFactory;
     *   use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *   use RetailCrm\Api\Model\Entity\WebAnalytics\Customer;
     *   use RetailCrm\Api\Model\Entity\WebAnalytics\Order;
     *   use RetailCrm\Api\Model\Entity\WebAnalytics\Source;
     *   use RetailCrm\Api\Model\Request\WebAnalytics\SourcesUploadRequest;
     *
     *   $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     *   $entity = new Source();
     *   $entity->source = "sourse";
     *   $entity->medium = "medium";
     *   $entity->campaign = "campaign";
     *   $entity->keyword = "keyword";
     *   $entity->content = "content";
     *   $entity->clientId = "10";
     *   $entity->order = new Order();
     *   $entity->order->id = 10;
     *   $entity->order->externalId = "externalId";
     *   $entity->order->number = "number";
     *   $entity->customer = new Customer();
     *   $entity->customer->id = 10;
     *   $entity->customer->externalId = 'externalId';
     *
     *  $request = new SourcesUploadRequest([$entity]);
     *
     *   try {
     *       $response = $client->webAnalytics->sourcesUpload($request);
     *   } catch (ApiExceptionInterface $exception) {
     *       echo sprintf(
     *           'Error from RetailCRM API (status code: %d): %s',
     *           $exception->getStatusCode(),
     *           $exception->getMessage()
     *       );
     *
     *       if (count($exception->getErrorResponse()->errors) > 0) {
     *           echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *       }
     *
     *       return;
     *   }
     *
     *   echo 'Upload is successful';
     *   ```
     *
     * @param \RetailCrm\Api\Model\Request\WebAnalytics\SourcesUploadRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\WebAnalytics\SourcesUploadResponse
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
    public function sourcesUpload(SourcesUploadRequest $request): SourcesUploadResponse
    {
        /** @var SourcesUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'web-analytics/sources/upload',
            $request,
            SourcesUploadResponse::class
        );

        return $response;
    }

    /**
     *
     *  Makes POST "/api/v5/web-analytics/client-ids/upload" request.
     *
     *  Example:
     *  ```php
     *  use RetailCrm\Api\Factory\SimpleClientFactory;
     *  use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *  use RetailCrm\Api\Model\Entity\WebAnalytics\ClientId;
     *  use RetailCrm\Api\Model\Entity\WebAnalytics\Customer;
     *  use RetailCrm\Api\Model\Entity\WebAnalytics\Order;
     *  use RetailCrm\Api\Model\Request\WebAnalytics\ClientIdUploadRequest;
     *
     *  $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     *  $entity = new ClientId();
     *  $entity->value = 'value';
     *  $entity->order = new Order();
     *  $entity->order->id = 10;
     *  $entity->order->externalId = 'externalId';
     *  $entity->order->number = 'number';
     *  $entity->customer = new Customer();
     *  $entity->customer->id = 10;
     *  $entity->customer->externalId = 'externalId';
     *
     * $request = new ClientIdUploadRequest([$entity]);
     *
     *  try {
     *      $response = $client->webAnalytics->clientIdsUpload($request);
     *  } catch (ApiExceptionInterface $exception) {
     *      echo sprintf(
     *          'Error from RetailCRM API (status code: %d): %s',
     *          $exception->getStatusCode(),
     *          $exception->getMessage()
     *      );
     *
     *      if (count($exception->getErrorResponse()->errors) > 0) {
     *          echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *      }
     *
     *      return;
     *  }
     *
     *  echo 'Upload is successful';
     *  ```
     *
     * @param \RetailCrm\Api\Model\Request\WebAnalytics\ClientIdUploadRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\WebAnalytics\ClientIdUploadResponse
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
    public function clientIdsUpload(ClientIdUploadRequest $request): ClientIdUploadResponse
    {
        /** @var ClientIdUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'web-analytics/client-ids/upload',
            $request,
            ClientIdUploadResponse::class
        );

        return $response;
    }
}
