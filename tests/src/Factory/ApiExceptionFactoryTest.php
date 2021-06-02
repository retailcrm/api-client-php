<?php

/**
 * PHP 7.3
 *
 * @category ApiExceptionFactoryTest
 * @package  RetailCrm\Tests\Factory
 */

namespace RetailCrm\Tests\Factory;

use RetailCrm\Api\Exception\Api\AccountDoesNotExistException;
use RetailCrm\Api\Exception\Api\ApiErrorException;
use RetailCrm\Api\Exception\Api\MissingCredentialsException;
use RetailCrm\Api\Exception\Api\MissingParameterException;
use RetailCrm\Api\Exception\Api\ValidationException;
use RetailCrm\Api\Factory\ApiExceptionFactory;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class ApiExceptionFactoryTest
 *
 * @category ApiExceptionFactoryTest
 * @package  RetailCrm\Tests\Factory
 */
class ApiExceptionFactoryTest extends AbstractApiResourceGroupTestCase
{
    /** @var \RetailCrm\Api\Factory\ApiExceptionFactory */
    private $factory;

    protected function setUp(): void
    {
        $this->factory = new ApiExceptionFactory();
    }

    public function testWrongOrEmptyResponse(): void
    {
        $exception = $this->factory->createException(new SuccessResponse(), 200);

        self::assertInstanceOf(ApiErrorException::class, $exception);
        self::assertEquals(200, $exception->getCode());
        self::assertEquals(200, $exception->getStatusCode());
        self::assertEquals('RetailCRM API Error', $exception->getMessage());
        self::assertFalse($exception->getErrorResponse()->success);
        self::assertEmpty($exception->getErrorResponse()->errors);
        self::assertEmpty($exception->getErrorResponse()->errorMsg);
    }

    public function testNormalResponse(): void
    {
        $response = new ErrorResponse();
        $response->errorMsg = 'Account does not exist.';

        $exception = $this->factory->createException($response, 404);

        self::assertInstanceOf(AccountDoesNotExistException::class, $exception);
        self::assertEquals(404, $exception->getCode());
        self::assertEquals(404, $exception->getStatusCode());
        self::assertEquals($response->errorMsg, $exception->getMessage());
        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
        self::assertFalse($exception->getErrorResponse()->success);
        self::assertEmpty($exception->getErrorResponse()->errors);
    }

    public function testEmptyErrorMsgResponse(): void
    {
        $response = new ErrorResponse();
        $response->errors = [
            'first',
            'second'
        ];

        $exception = $this->factory->createException($response, 400);

        self::assertInstanceOf(ApiErrorException::class, $exception);
        self::assertEquals(400, $exception->getCode());
        self::assertEquals(400, $exception->getStatusCode());
        self::assertEquals('first', $exception->getMessage());
        self::assertFalse($exception->getErrorResponse()->success);
        self::assertEmpty($exception->getErrorResponse()->errorMsg);
        self::assertCount(2, $exception->getErrorResponse()->errors);
    }

    public function testMissingParameter(): void
    {
        $response = new ErrorResponse();
        $response->errorMsg = "Parameter 'integrationModule' is missing";

        $exception = $this->factory->createException($response, 400);

        self::assertInstanceOf(MissingParameterException::class, $exception);
        self::assertEquals(400, $exception->getCode());
        self::assertEquals(400, $exception->getStatusCode());
        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
        self::assertFalse($exception->getErrorResponse()->success);
    }

    public function testMissingApiKey(): void
    {
        $response = new ErrorResponse();
        $response->errorMsg = "\"apiKey\" is missing.";

        $exception = $this->factory->createException($response, 400);

        self::assertInstanceOf(MissingCredentialsException::class, $exception);
        self::assertEquals(400, $exception->getCode());
        self::assertEquals(400, $exception->getStatusCode());
        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
        self::assertFalse($exception->getErrorResponse()->success);
    }

    public function testValidationError(): void
    {
        $response = new ErrorResponse();
        $response->errorMsg = "Errors in the entity format";
        $response->errors = ["code" => "Code prefix must match integrationCode"];

        $exception = $this->factory->createException($response, 400);

        self::assertInstanceOf(ValidationException::class, $exception);
        self::assertEquals(400, $exception->getCode());
        self::assertEquals(400, $exception->getStatusCode());
        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
        self::assertFalse($exception->getErrorResponse()->success);
        self::assertStringContainsString($exception->getMessage(), (string) $exception);
    }
}
