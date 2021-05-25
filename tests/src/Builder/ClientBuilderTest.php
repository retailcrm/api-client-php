<?php

/**
 * PHP 7.3
 *
 * @category ClientBuilderTest
 * @package  RetailCrm\Tests\Builder
 */

namespace RetailCrm\Tests\Builder;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Exception\Client\BuilderException;
use Http\Client\Curl\Client as CurlClient;
use League\Event\EventDispatcher;
use Nyholm\Psr7\Factory\Psr17Factory;
use RetailCrm\Api\Builder\FormEncoderBuilder;
use RetailCrm\Api\Component\Transformer\RequestTransformer;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Factory\ApiExceptionFactory;
use RetailCrm\Api\Factory\RequestPipelineFactory;
use RetailCrm\Api\Factory\ResponsePipelineFactory;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;
use RetailCrm\TestUtils\ReflectionUtils;
use RetailCrm\TestUtils\TestConfig;

/**
 * Class ClientBuilderTest
 *
 * @category ClientBuilderTest
 * @package  RetailCrm\Tests\Builder
 */
class ClientBuilderTest extends TestCase
{
    public function testNoData(): void
    {
        $this->expectException(BuilderException::class);
        $this->expectDeprecationMessage('apiUrl must not be empty');
        (new ClientBuilder())->build();
    }

    public function testNoDataCheckFields(): void
    {
        try {
            (new ClientBuilder())->build();
        } catch (BuilderException $exception) {
            self::assertEquals(['apiUrl'], $exception->getInvalidArgument());
        }
    }

    public function testNoRequestTransformer(): void
    {
        $this->expectException(BuilderException::class);
        $this->expectDeprecationMessage('Authenticator or RequestTransformer must be present');
        (new ClientBuilder())
            ->setApiUrl('https://test.retailcrm.pro')
            ->build();
    }

    public function testBuild(): void
    {
        $eventDispatcher = new EventDispatcher();
        $psr17Factory = new Psr17Factory();
        $httpClient = new CurlClient();

        $builder = new ClientBuilder();
        $formEncoder = (new FormEncoderBuilder())->setCacheDir('cache')->build();
        $requestTransformer = new RequestTransformer(RequestPipelineFactory::createDefaultPipeline(
            $formEncoder,
            $psr17Factory, // PSR-17 UriFactoryInterface
            $psr17Factory, // PSR-17 RequestFactoryInterface
            $psr17Factory  // PSR-17 StreamFactoryInterface
        ));
        $responseTransformer = new ResponseTransformer(ResponsePipelineFactory::createDefaultPipeline(
            $formEncoder->getSerializer(),
            new ApiExceptionFactory(),
            $eventDispatcher
        ));
        $client = $builder->setApiUrl(TestConfig::getApiUrl())
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler(TestConfig::getApiKey()))
            ->setFormEncoder($formEncoder)
            ->setHttpClient($httpClient)
            ->setRequestTransformer($requestTransformer)
            ->setResponseTransformer($responseTransformer)
            ->build();

        /** @var \RetailCrm\Api\ResourceGroup\Api $api */
        $api = ReflectionUtils::getProperty($client, 'api');

        self::assertStringContainsString(TestConfig::getApiUrl(), ReflectionUtils::getProperty($api, 'baseUrl'));
        self::assertEquals($httpClient, ReflectionUtils::getProperty($api, 'httpClient'));
        self::assertEquals($requestTransformer, ReflectionUtils::getProperty($api, 'requestTransformer'));
        self::assertEquals($responseTransformer, ReflectionUtils::getProperty($api, 'responseTransformer'));
    }
}
