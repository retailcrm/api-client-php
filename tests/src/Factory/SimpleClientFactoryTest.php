<?php

/**
 * PHP version 7.3
 *
 * @category SimpleClientFactoryTest
 * @package  RetailCrm\Tests\Factory
 */

namespace RetailCrm\Tests\Factory;

use Doctrine\Common\Annotations\PsrCachedReader;
use RetailCrm\Api\Enum\CacheDirectories;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\TestUtils\TestCase\ClientTestCase;
use RetailCrm\TestUtils\TestConfig;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

/**
 * Class SimpleClientFactoryTest
 *
 * @category SimpleClientFactoryTest
 * @package  RetailCrm\Tests\Factory
 */
class SimpleClientFactoryTest extends ClientTestCase
{
    public function testCreateClient(): void
    {
        $client = SimpleClientFactory::createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());

        static::assertClientIsValid($client);
    }

    public function testCreateWithCache(): void
    {
        $client = SimpleClientFactory::createWithCache(
            TestConfig::getApiUrl(),
            TestConfig::getApiKey(),
            new ArrayAdapter()
        );

        static::assertClientIsValid($client, PsrCachedReader::class, ArrayAdapter::class);
    }

    public function testCreateWithCacheDir(): void
    {
        $client = SimpleClientFactory::createWithCacheDir(
            TestConfig::getApiUrl(),
            TestConfig::getApiKey(),
            sys_get_temp_dir()
        );
        $cacheDir = implode(
            '',
            [sys_get_temp_dir(), CacheDirectories::MAIN_DIR]
        );

        static::assertDirectoryExists($cacheDir);
        static::assertClientIsValid(
            $client,
            PsrCachedReader::class,
            FilesystemAdapter::class,
            $cacheDir
        );
    }
}
