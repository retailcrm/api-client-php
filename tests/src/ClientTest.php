<?php

/**
 * PHP version 7.3
 *
 * @category ClientTest
 * @package  RetailCrm\Tests
 */

namespace RetailCrm\Tests;

use Doctrine\Common\Annotations\PsrCachedReader;
use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Handler\Request\RequestDataHandler;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Api\Interfaces\HandlerInterface;
use RetailCrm\Api\Interfaces\RequestTransformerInterface;
use RetailCrm\Api\Model\Entity\Customers\Customer;
use RetailCrm\Api\Model\Entity\Customers\CustomerNote;
use RetailCrm\Api\Model\Request\Customers\CustomersNotesCreateRequest;
use RetailCrm\Api\ResourceGroup\Api;
use RetailCrm\TestUtils\ReflectionUtils;
use RetailCrm\TestUtils\TestConfig;
use RuntimeException;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

/**
 * Class ClientTest
 *
 * @category ClientTest
 * @package  RetailCrm\Tests
 */
class ClientTest extends TestCase
{
    public function testFileCacheWorks(): void
    {
        $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'retailcrm_test_metadata_cache_' . uniqid();
        $client = SimpleClientFactory::createWithCacheDir(
            TestConfig::getApiUrl(),
            TestConfig::getApiKey(),
            $dir
        );

        self::assertDirectoryExists($dir);

        $api = ReflectionUtils::getProperty($client, 'api');
        self::assertInstanceOf(Api::class, $api);

        $requestTransformer = ReflectionUtils::getProperty($api, 'requestTransformer');
        self::assertInstanceOf(RequestTransformerInterface::class, $requestTransformer);

        $handler = ReflectionUtils::getProperty($requestTransformer, 'handler');
        self::assertInstanceOf(HandlerInterface::class, $handler);

        /** @var FormEncoderInterface $formEncoder */
        $formEncoder = ReflectionUtils::getProperty(static::findModelDataHandler($handler), 'formEncoder');
        self::assertInstanceOf(FormEncoderInterface::class, $formEncoder);

        $request                             = new CustomersNotesCreateRequest();
        $request->site                       = 'moysklad';
        $request->note                       = new CustomerNote();
        $request->note->customer             = new Customer();
        $request->note->customer->externalId = '10';
        $request->note->managerId            = 21;
        $request->note->text                 = 'Text';

        $encoded = $formEncoder->encode($request);
        self::assertNotEmpty($encoded);

        $annotationReader = ReflectionUtils::getProperty($formEncoder, 'annotationReader');
        self::assertInstanceOf(PsrCachedReader::class, $annotationReader);

        $cache    = ReflectionUtils::getProperty($annotationReader, 'cache');
        $cacheDir = ReflectionUtils::getProperty($cache, 'directory');

        self::assertInstanceOf(FilesystemAdapter::class, $cache);
        self::assertStringStartsWith($dir, $cacheDir);
        self::assertDirectoryExists($cacheDir);
        self::assertTrue(is_readable($cacheDir) && count(scandir($cacheDir)) > 2);

        static::recursiveRmdir($dir);
    }

    /**
     * @param \RetailCrm\Api\Interfaces\HandlerInterface $handler
     *
     * @return \RetailCrm\Api\Handler\Request\RequestDataHandler
     */
    private static function findModelDataHandler(HandlerInterface $handler): RequestDataHandler
    {
        if ($handler instanceof RequestDataHandler) {
            return $handler;
        }

        while ($handler = $handler->getNext()) {
            if ($handler instanceof RequestDataHandler) {
                return $handler;
            }
        }

        throw new RuntimeException('RequestDataHandler is not present in the chain.');
    }

    /**
     * @param string $dir
     */
    private static function recursiveRmdir(string $dir): void
    {
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($files as $fileInfo) {
            $todo = ($fileInfo->isDir() ? 'rmdir' : 'unlink');
            $todo($fileInfo->getRealPath());
        }

        rmdir($dir);
    }
}
