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
use RetailCrm\Api\Model\Request\WebAnalytics\VisitsUploadRequest;
use RetailCrm\Api\Model\Response\WebAnalytics\ClientIdUploadResponse;
use RetailCrm\Api\Model\Response\WebAnalytics\SourcesUploadResponse;
use RetailCrm\Api\Model\Response\WebAnalytics\VisitsUploadResponse;

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

    /**
     *
     *  Makes POST "/api/v5/web-analytics/client-ids/upload" request.
     *
     *  Example:
     *  ```php
     *  use RetailCrm\Api\Factory\SimpleClientFactory;
     *  use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *  use RetailCrm\Api\Model\Entity\WebAnalytics\Visit;
     *  use RetailCrm\Api\Model\Entity\WebAnalytics\Customer;
     *  use RetailCrm\Api\Model\Request\WebAnalytics\VisitsUploadRequest;
     *
     *  $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     *  $entity = new Visit();
     *  $dateTime = new \DateTime('2023-12-06T12:00:00');
     *  $entity->createdAt = $dateTime->format('Y-m-d H:i:s');
     *  $entity->visitLength = 10;
     *  $entity->exitPage = '/exit-page';
     *  $entity->landingPage = '/landing-page';
     *  $entity->pageViews = 5;
     *  $entity->pageDepth = 3;
     *  $entity->customer = new Customer();
     *  $entity->customer->id = 10;
     *  $entity->customer->externalId = 'externalId';
     *  $entity->source = new Source();
     *  $entity->source = "sourse";
     *  $entity->medium = "medium";
     *  $entity->campaign = "campaign";
     *  $entity->keyword = "keyword";
     *  $entity->content = "content";
     *  $page1 = new Page();
     *  $page1->url = ('/page1');
     *  $page1->title = ('Page 1');
     *  $page1->countViews = 2;
     *  $page1->timeOnPage = 60;
     *  $page2 = new Page();
     *  $page2->url = ('/page2');
     *  $page2->title = ('Page 2');
     *  $page2->countViews = 3;
     *  $page2->timeOnPage = 45;
     *  $pages = [$page1, $page2];
     *  $entity->pages = $pages;
     *  $entity->clientId = '123456';
     *  $entity->site = 'example.com';
     *
     * $request = new VisitsUploadRequest([$entity]);
     *
     *  try {
     *      $response = $client->webAnalytics->visitsUpload($request);
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
     * @param \RetailCrm\Api\Model\Request\WebAnalytics\VisitsUploadRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\WebAnalytics\VisitsUploadResponse
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
    public function visitsUpload(VisitsUploadRequest $request): VisitsUploadResponse
    {
        /** @var VisitsUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'web-analytics/visits/upload',
            $request,
            VisitsUploadResponse::class
        );

        return $response;
    }
}
