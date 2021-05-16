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

        $mock = static::createApiMockBuilder('files');
        $mock->matchMethod(RequestMethod::GET)
            ->matchQuery(static::encodeFormArray($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
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

        $mock    = static::createApiMockBuilder('files/upload');
        $file    = Psr17FactoryDiscovery::findStreamFactory()->createStream('test data');
        $request = new FilesUploadRequest($file);

        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client  = TestClientFactory::createClient($mock->getClient());
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

        $mock = static::createApiMockBuilder('files/25');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
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

        $mock = static::createApiMockBuilder('files/1/delete');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->files->delete(1);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDownload(): void
    {
        $mock     = static::createApiMockBuilder('files/25/download');
        $fileData = 'test data';

        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withHeader('Content-Disposition', 'attachment; filename="filename.txt"')
            ->withBody($fileData);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->files->download(25);

        self::assertEquals('filename.txt', $response->fileName);
        self::assertEquals($fileData, $response->data->getContents());
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

        $mock = static::createApiMockBuilder('files/1/edit');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(static::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->files->edit(1, $request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
