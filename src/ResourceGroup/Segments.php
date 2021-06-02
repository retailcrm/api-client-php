<?php

/**
 * PHP version 7.3
 *
 * @category Segments
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Segments\SegmentsRequest;
use RetailCrm\Api\Model\Response\Segments\SegmentsResponse;

/**
 * Class Segments
 *
 * @category Segments
 * @package  RetailCrm\Api\ResourceGroup
 */
class Segments extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/segments" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\NumericBoolean;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Segments\SegmentApiFilter;
     * use RetailCrm\Api\Model\Request\Segments\SegmentsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                            = new SegmentsRequest();
     * $request->filter                    = new SegmentApiFilter();
     * $request->filter->active            = NumericBoolean::TRUE;
     * $request->filter->minCustomersCount = 700;
     *
     * try {
     *     $response = $client->segments->list($request);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Received segments: ' . print_r($response->segments, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Segments\SegmentsRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Segments\SegmentsResponse
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
    public function list(?SegmentsRequest $request = null): SegmentsResponse
    {
        /** @var SegmentsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'segments',
            $request,
            SegmentsResponse::class
        );
        return $response;
    }
}
