<?php

/**
 * PHP version 5.4
 *
 * API client prices test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientPricesTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
class ApiClientFilesTest extends TestCase
{
    /**
     * @group files_v5
     */
    public function testFilesList()
    {
        $client = static::getApiClient();

        $response = $client->request->filesList();

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());
    }

    /**
     * @group files_v5
     */
    public function testFileUpload()
    {
        $client = static::getApiClient();

        $response = $client->request->fileUpload(__DIR__ . '/../../../Tests/Resources/Report.pdf');

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());

        sleep(1);

        $fileId = $response['file']['id'];

        $response = $client->request->fileGet($fileId);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());

        sleep(1);

        $response = $client->request->fileEdit($fileId, ['filename' => 'Test file']);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());

        sleep(1);

        $response = $client->request->fileDelete($fileId);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertTrue($response->isSuccessful());

        sleep(1);
    }

    public function testFileEditFailure()
    {
        static::expectExceptionObject(new \InvalidArgumentException('Invalid structure of `file` parameter'));
        $client = static::getApiClient();

        $client->request->fileEdit(1, ['file' => []]);
    }
}
