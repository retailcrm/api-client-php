<?php

/**
 * PHP version 7.3
 *
 * @category Files
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Files\FilesEditRequest;
use RetailCrm\Api\Model\Request\Files\FilesRequest;
use RetailCrm\Api\Model\Request\Files\FilesUploadRequest;
use RetailCrm\Api\Model\Response\Files\FilesDownloadResponse;
use RetailCrm\Api\Model\Response\Files\FilesGetResponse;
use RetailCrm\Api\Model\Response\Files\FilesResponse;
use RetailCrm\Api\Model\Response\Files\FilesUploadResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class Files
 *
 * @category Files
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Files extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/files" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\PaginationLimit;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Files\FileFilter;
     * use RetailCrm\Api\Model\Request\Files\FilesRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                 = new FilesRequest();
     * $request->filter         = new FileFilter();
     * $request->filter->sites  = ['moysklad', 'aliexpress'];
     * $request->filter->sizeTo = 20;
     * $request->page           = 1;
     * $request->limit          = PaginationLimit::LIMIT_20;
     *
     * try {
     *     $response = $client->files->list($request);
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
     * echo 'Files: ' . print_r($response->files, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Files\FilesRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Files\FilesResponse
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
    public function list(?FilesRequest $request = null): FilesResponse
    {
        /** @var FilesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'files',
            $request,
            FilesResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/files/upload" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Request\Files\FilesUploadRequest;
     *
     * $client   = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     * $fileData = $client->getStreamFactory()->createStreamFromFile('report.xlsx');
     *
     * try {
     *     $response = $client->files->upload(new FilesUploadRequest($fileData));
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
     * echo 'Uploaded file: ' . print_r($response->file->id, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Files\FilesUploadRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Files\FilesUploadResponse
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
    public function upload(FilesUploadRequest $request): FilesUploadResponse
    {
        /** @var FilesUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'files/upload',
            $request,
            FilesUploadResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/files/{id}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->files->get(1);
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
     * echo 'Got file: ' . print_r($response->file, true);
     * ```
     *
     * @param int $fileId
     *
     * @return \RetailCrm\Api\Model\Response\Files\FilesGetResponse
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
    public function get(int $fileId): FilesGetResponse
    {
        /** @var FilesGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'files/' . $fileId,
            null,
            FilesGetResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/files/{id}/delete" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->files->delete(1);
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
     * ```
     *
     * @param int $fileId
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
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
    public function delete(int $fileId): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'files/' . $fileId . '/delete',
            null,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/files/{id}/download" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->files->download(1);
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
     * printf('Saving downloaded file to "%s."', $response->fileName);
     * file_put_contents($response->fileName, $response->data->getContents());
     * ```
     *
     * @param int $fileId
     *
     * @return \RetailCrm\Api\Model\Response\Files\FilesDownloadResponse
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
    public function download(int $fileId): FilesDownloadResponse
    {
        /** @var FilesDownloadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'files/' . $fileId . '/download',
            null,
            ''
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/files/{id}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Files\File;
     * use RetailCrm\Api\Model\Request\Files\FilesEditRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request                 = new FilesEditRequest();
     * $request->file           = new File();
     * $request->file->filename = 'Test File.xml';
     *
     * try {
     *     $response = $client->files->edit(1, $request);
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
     * echo 'Edited file: ' . $response->file->id;
     * ```
     *
     * @param int                                                 $fileId
     * @param \RetailCrm\Api\Model\Request\Files\FilesEditRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Files\FilesUploadResponse
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
    public function edit(int $fileId, FilesEditRequest $request): FilesUploadResponse
    {
        /** @var FilesUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'files/' . $fileId . '/edit',
            $request,
            FilesUploadResponse::class
        );
        return $response;
    }
}
