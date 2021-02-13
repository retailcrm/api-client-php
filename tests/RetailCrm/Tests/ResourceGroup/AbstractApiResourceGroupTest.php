<?php

/**
 * PHP version 7.3
 *
 * @category AbstractApiResourceGroupTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

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
use RetailCrm\Api\Component\FormData\FormEncoder;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Interfaces\RequestInterface as RetailCrmRequestInterface;
use RetailCrm\Api\Interfaces\ResponseInterface as RetailCrmResponseInterface;
use RetailCrm\Test\MatcherException;
use RetailCrm\Test\RequestMatcher;
use RetailCrm\Test\TestConfig;

/**
 * Class AbstractApiResourceGroupTest
 *
 * @category AbstractApiResourceGroupTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
abstract class AbstractApiResourceGroupTest extends TestCase
{
    /** @var SerializerInterface */
    protected static $serializer;

    /** @var FormEncoder */
    protected static $formEncoder;

    /** @var ResponseFactoryInterface */
    protected static $responseFactory;

    /** @var StreamFactoryInterface */
    protected static $streamFactory;

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
     * @param \RetailCrm\Api\Interfaces\RequestInterface $request
     *
     * @return string
     * @throws \ReflectionException
     */
    public static function encodeForm(RetailCrmRequestInterface $request): string
    {
        return static::getFormEncoder()->encode($request);
    }

    /**
     * @param \RetailCrm\Api\Interfaces\RequestInterface $request
     *
     * @return mixed[]
     * @throws \ReflectionException
     */
    public static function encodeFormArray(RetailCrmRequestInterface $request): array
    {
        return static::clearArray(static::getFormEncoder()->encodeArray($request));
    }

    /**
     * @param mixed $value
     *
     * @return string
     */
    public static function serialize($value): string
    {
        return static::getSerializer()->serialize($value, 'json');
    }

    /**
     * Removes all empty fields from arrays, works for nested arrays
     *
     * @param mixed[] $arr
     *
     * @return mixed
     */
    public static function clearArray(array $arr)
    {
        if (!is_array($arr)) {
            return $arr;
        }

        $result = [];

        foreach ($arr as $index => $node) {
            $result[$index] = is_array($node) === true ? static::clearArray($node) : trim($node);

            if (
                '' === $result[$index] ||
                null === $result[$index] ||
                (is_array($result[$index]) && count($result[$index]) < 1)
            ) {
                unset($result[$index]);
            }
        }

        return $result;
    }

    /**
     * @param string                                      $expectedJson
     * @param \RetailCrm\Api\Interfaces\ResponseInterface $response
     *
     * @throws \JsonException
     */
    protected static function assertModelEqualsToResponse(
        string $expectedJson,
        RetailCrmResponseInterface $response
    ): void {
        self::assertEquals(
            json_decode($expectedJson, true, 512, JSON_THROW_ON_ERROR),
            self::getSerializer()->toArray($response)
        );
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
     * @return \Psr\Http\Message\StreamFactoryInterface
     */
    protected static function getStreamFactory(): StreamFactoryInterface
    {
        if (null === static::$streamFactory) {
            static::$streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        }

        return static::$streamFactory;
    }

    /**
     * @return \Psr\Http\Message\ResponseFactoryInterface
     */
    protected static function getResponseFactory(): ResponseFactoryInterface
    {
        if (null === static::$responseFactory) {
            static::$responseFactory = Psr17FactoryDiscovery::findResponseFactory();
        }

        return static::$responseFactory;
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
     * @return \RetailCrm\Api\Component\FormData\FormEncoder
     */
    private static function getFormEncoder(): FormEncoder
    {
        if (null === static::$formEncoder) {
            static::$formEncoder = new FormEncoder();
        }

        return static::$formEncoder;
    }
}