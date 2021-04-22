<?php

/**
 * PHP version 7.3
 *
 * @category FilesTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use Http\Discovery\Psr17FactoryDiscovery;
use RetailCrm\Api\Enum\PaginationLimit;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Exception\Api\AccountDoesNotExistException;
use RetailCrm\Api\Exception\Api\ApiErrorException;
use RetailCrm\Api\Exception\Api\MissingCredentialsException;
use RetailCrm\Api\Exception\Api\MissingParameterException;
use RetailCrm\Api\Exception\Api\ValidationException;
use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Exception\Client\HttpClientException;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Model\Entity\Files\File;
use RetailCrm\Api\Model\Filter\Files\FileFilter;
use RetailCrm\Api\Model\Request\Files\FilesEditRequest;
use RetailCrm\Api\Model\Request\Files\FilesRequest;
use RetailCrm\Api\Model\Request\Files\FilesUploadRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class FilesTest
 *
 * @category FilesTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class FilesTest extends AbstractApiResourceGroupTestCase
{
    public function testList(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 1,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "files": [
    {
      "id": 25,
      "filename": "API upload 20-02-2021 18:36:47",
      "type": "text/plain",
      "createdAt": "2021-02-20 18:36:47",
      "size": 14,
      "attachment": [

      ]
    }
  ]
}
EOF;

        $request                 = new FilesRequest();
        $request->filter         = new FileFilter();
        $request->filter->sites  = ['moysklad', 'aliexpress'];
        $request->filter->sizeTo = 20;
        $request->page           = 1;
        $request->limit          = PaginationLimit::LIMIT_20;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('files')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(static::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->files->list($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testUpload(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "file": {
    "id": 1
  }
}
EOF;

        $mock    = static::getMockClient();
        $client  = TestClientFactory::createClient($mock);
        $file    = $client->getStreamFactory()->createStream('test data');
        $request = new FilesUploadRequest($file);

        $mock->on(
            static::createRequestMatcher('files/upload')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $response = $client->files->upload($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testGet(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "file": {
    "id": 25,
    "filename": "API upload 20-02-2021 18:36:47",
    "type": "text/plain",
    "createdAt": "2021-02-20 18:36:47",
    "size": 14,
    "attachment": [

    ]
  }
}
EOF;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('files/25')
                ->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->files->get(25);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDelete(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('files/1/delete')
                ->setMethod(RequestMethod::POST),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->files->delete(1);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDownload(): void
    {
        $mock     = static::getMockClient();
        $client   = TestClientFactory::createClient($mock);
        $fileData = $client->getStreamFactory()->createStream('test data');

        $mock->on(
            static::createRequestMatcher('files/25/download')
                ->setMethod(RequestMethod::GET),
            Psr17FactoryDiscovery::findResponseFactory()
                ->createResponse(200)
                ->withHeader('Content-Disposition', 'attachment; filename="filename.txt"')
                ->withBody($fileData)
        );

        $response = $client->files->download(25);

        self::assertEquals('filename.txt', $response->fileName);
        self::assertEquals($fileData->getContents(), $response->data->getContents());
    }

    public function testEdit(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "file": {
    "id": 1
  }
}
EOF;

        $request                 = new FilesEditRequest();
        $request->file           = new File();
        $request->file->filename = 'Test File.xml';

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('files/1/edit')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->files->edit(1, $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
