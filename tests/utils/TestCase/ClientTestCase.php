<?php

/**
 * PHP version 7.3
 *
 * @category ClientTestCase
 * @package  RetailCrm\Tests\Factory
 */

namespace RetailCrm\TestUtils\TestCase;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\PsrCachedReader;
use Doctrine\Common\Cache\FilesystemCache;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Client;
use RetailCrm\Api\Handler\Request\RequestDataHandler;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Api\Interfaces\HandlerInterface;
use RetailCrm\Api\Interfaces\RequestTransformerInterface;
use RetailCrm\Api\ResourceGroup\Api;
use RetailCrm\TestUtils\ReflectionUtils;
use RetailCrm\TestUtils\TestConfig;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

/**
 * Trait ClientTestCase
 *
 * @category ClientTestCase
 * @package  RetailCrm\Tests\Factory
 */
abstract class ClientTestCase extends TestCase
{
    /**
     * Validate client
     *
     * @param mixed  $client
     * @param string $readerClass
     * @param string $cacheClass
     * @param string $directory
     * @param bool   $loggerPresent
     *
     * @throws \ReflectionException
     */
    protected static function assertClientIsValid(
        $client,
        string $readerClass = PsrCachedReader::class,
        string $cacheClass = '',
        string $directory = '',
        bool $loggerPresent = false
    ): void {
        self::assertInstanceOf(Client::class, $client);

        $api = ReflectionUtils::getProperty($client, 'api');

        self::assertInstanceOf(Api::class, $api);
        self::assertEquals(
            parse_url(TestConfig::getApiUrl(), PHP_URL_HOST),
            parse_url(ReflectionUtils::getProperty($api, 'baseUrl'), PHP_URL_HOST)
        );

        $requestTransformer = ReflectionUtils::getProperty($api, 'requestTransformer');
        self::assertInstanceOf(RequestTransformerInterface::class, $requestTransformer);

        $handler = ReflectionUtils::getProperty($requestTransformer, 'handler');
        self::assertInstanceOf(HandlerInterface::class, $handler);

        $modelDataHandler = static::findModelDataHandler($handler);
        $formEncoder = ReflectionUtils::getProperty($modelDataHandler, 'formEncoder');

        self::assertInstanceOf(FormEncoderInterface::class, $formEncoder);

        $annotationReader = ReflectionUtils::getProperty($formEncoder, 'annotationReader');
        self::assertInstanceOf($readerClass, $annotationReader);

        if ('' !== $cacheClass) {
            $cache = ReflectionUtils::getProperty($annotationReader, 'cache');
            self::assertInstanceOf($cacheClass, $cache);

            if ('' !== $directory) {
                self::assertInstanceOf(FilesystemAdapter::class, $cache);
                self::assertStringContainsString($directory, ReflectionUtils::getProperty($cache, 'directory'));
            }
        }

        if ($loggerPresent) {
            self::assertInstanceOf(LoggerInterface::class, ReflectionUtils::getProperty($api, 'logger'));
        }
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
}
