<?php

/**
 * PHP version 7.3
 *
 * @category ClientFactoryTest
 * @package  RetailCrm\Tests\Factory
 */

namespace RetailCrm\Tests\Factory;

use Doctrine\Common\Annotations\CachedReader;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\Common\Cache\FilesystemCache;
use RetailCrm\Api\Enum\CacheDirectories;
use RetailCrm\Api\Factory\ClientFactory;
use RetailCrm\Test\TestConfig;

/**
 * Class ClientFactoryTest
 *
 * @category ClientFactoryTest
 * @package  RetailCrm\Tests\Factory
 */
class ClientFactoryTest extends ClientTestCase
{
    public function testCreateClient(): void
    {
        $client = (new ClientFactory())->createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());

        static::assertClientIsValid($client);
    }

    public function testCreateWithCache(): void
    {
        $client = (new ClientFactory())
            ->setCache(new ArrayCache())
            ->createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());

        static::assertClientIsValid($client, CachedReader::class, ArrayCache::class);
    }

    public function testCreateWithCacheDir(): void
    {
        $client = (new ClientFactory())
            ->setCacheDir(sys_get_temp_dir())
            ->createClient(TestConfig::getApiUrl(), TestConfig::getApiKey());
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
