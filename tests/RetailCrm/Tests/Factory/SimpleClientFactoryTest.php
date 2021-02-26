<?php

/**
 * PHP version 7.3
 *
 * @category SimpleClientFactoryTest
 * @package  RetailCrm\Tests\Factory
 */

namespace RetailCrm\Tests\Factory;

use Doctrine\Common\Annotations\CachedReader;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\Common\Cache\FilesystemCache;
use RetailCrm\Api\Enum\CacheDirectories;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Test\TestConfig;

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
            new ArrayCache()
        );

        static::assertClientIsValid($client, CachedReader::class, ArrayCache::class);
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
            CachedReader::class,
            FilesystemCache::class,
            $cacheDir
        );
    }
}
