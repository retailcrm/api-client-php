<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiSectionTest
 * @package  RetailCrm\Tests\Section
 */

namespace RetailCrm\Tests\Section;

use Doctrine\Common\Cache\ArrayCache;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Mock\Client as MockClient;
use InvalidArgumentException;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Metadata\Cache\DoctrineCacheAdapter;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Test\MatcherException;
use RetailCrm\Test\RequestMatcher;
use RetailCrm\Test\TestConfig;

use function _HumbugBox7b277e069751\RingCentral\Psr7\str;

/**
 * Class AbstractApiSectionTest
 *
 * @category AbstractApiSectionTest
 * @package  RetailCrm\Tests\Section
 */
abstract class AbstractApiSectionTest extends TestCase
{
    /** @var SerializerInterface */
    private static $serializer;

    /** @var ResponseFactoryInterface */
    private static $responseFactory;

    /** @var StreamFactoryInterface */
    private static $streamFactory;

    /**
     * @return \Http\Mock\Client
     */
    protected static function getMockClient(): MockClient
    {
        $client = new MockClient();
        $client->setDefaultException(new MatcherException());

        return $client;
    }

    /**
     * @param int                                    $code
     * @param object|mixed[]|string $response
     *
     * @return \Psr\Http\Message\ResponseInterface
     * @throws InvalidArgumentException
     */
    protected static function responseJson(int $code, $response): ResponseInterface
    {
        $data = null;

        switch (gettype($response)) {
            case 'string':
                $data = static::getStreamFactory()->createStream((string) $response);
                break;
            case 'array':
            case 'object':
                $data = static::getStreamFactory()->createStream(static::getSerializer()->serialize($response, 'json'));
                break;
            default:
                throw new InvalidArgumentException(sprintf(
                    'Expected string, object, or array, got "%s"',
                    gettype($response)
                ));
        }

        return static::getResponseFactory()->createResponse($code)
            ->withHeader('Content-Type', 'application/json')
            ->withBody($data);
    }

    /**
     * @param string $path
     *
     * @return \RetailCrm\Test\RequestMatcher
     */
    protected static function createRequestMatcher(string $path = ''): RequestMatcher
    {
        $url = parse_url(TestConfig::getApiUrl());

        return RequestMatcher::createMatcher($url['host'])
            ->setOptionalHeaders(['x-api-key' => [TestConfig::getApiKey()]])
            ->setPath(static::addTrailingSlash($url['path']) . $path);
    }

    /**
     * @param string $path
     *
     * @return \RetailCrm\Test\RequestMatcher
     */
    protected static function createUnversionedRequestMatcher(string $path = ''): RequestMatcher
    {
        $url = parse_url(TestConfig::getApiUrl());

        return RequestMatcher::createMatcher($url['host'])
            ->setOptionalHeaders(['x-api-key' => [TestConfig::getApiKey()]])
            ->setPath(static::addTrailingSlash(Utils::removeVersionFromUri($url['path'])) . $path);
    }

    /**
     * @param string $text
     *
     * @return string
     */
    private static function addTrailingSlash(string $text): string
    {
        if ('' === $text) {
            return '';
        }

        if ('/' !== $text[strlen($text) - 1]) {
            return $text . '/';
        }

        return $text;
    }

    /**
     * @return \JMS\Serializer\SerializerInterface
     */
    private static function getSerializer(): SerializerInterface
    {
        if (null === static::$serializer) {
            static::$serializer = SerializerBuilder::create()
                ->addDefaultHandlers()
                ->addDefaultListeners()
                ->setMetadataCache(new DoctrineCacheAdapter('retailcrm', new ArrayCache()))
                ->build();
        }

        return static::$serializer;
    }

    /**
     * @return \Psr\Http\Message\StreamFactoryInterface
     */
    private static function getStreamFactory(): StreamFactoryInterface
    {
        if (null === static::$streamFactory) {
            static::$streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        }

        return static::$streamFactory;
    }

    /**
     * @return \Psr\Http\Message\ResponseFactoryInterface
     */
    public static function getResponseFactory(): ResponseFactoryInterface
    {
        if (null === static::$responseFactory) {
            static::$responseFactory = Psr17FactoryDiscovery::findResponseFactory();
        }

        return self::$responseFactory;
    }
}
