<?php

/**
 * PHP version 7.3
 *
 * @category FilesDownloadResponseHandlerTest
 * @package  RetailCrm\Tests\Handler\Response
 */

namespace RetailCrm\Tests\Handler\Response;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;
use RetailCrm\Api\Handler\Response\FilesDownloadResponseHandler;

/**
 * Class FilesDownloadResponseHandlerTest
 *
 * @category CallbackResponseHandlerTest
 * @package  RetailCrm\Tests\Handler\Response
 */
class FilesDownloadResponseHandlerTest extends TestCase
{
    /**
     * @dataProvider pathProvider
     *
     * @return void
     * @throws ReflectionException
     */
    public function testIsFileRequest(string $path, bool $expectation): void
    {
        $handlerMock = $this->createMock(FilesDownloadResponseHandler::class);

        $class = new ReflectionClass(FilesDownloadResponseHandler::class);
        $method = $class->getMethod('isFileRequest');
        $method->setAccessible(true);

        $result = $method->invoke($handlerMock, $path);

        static::assertEquals($expectation, $result);
    }

    public function pathProvider(): array
    {
        return [
            [
                '/api/v5/files/111/download',
                true,
            ],
            [
                '/api/v5/orders/xxx-001/plates/11231/print',
                true,
            ],
            [
                '/api/v5/orders/222/edit',
                false,
            ],
            [
                '/api/v5/files/upload',
                false,
            ],
        ];
    }
}
