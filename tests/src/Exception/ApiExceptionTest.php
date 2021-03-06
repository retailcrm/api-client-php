<?php

/**
 * PHP version 7.3
 *
 * @category ApiExceptionTest
 * @package  RetailCrm\Tests\Exception
 */

namespace RetailCrm\Tests\Exception;

use RetailCrm\Api\Exception\ApiException;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Model\Response\ErrorResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class ApiExceptionTest
 *
 * @category ApiExceptionTest
 * @package  RetailCrm\Tests\Exception
 */
class ApiExceptionTest extends AbstractApiResourceGroupTestCase
{
    public function testWrongOrEmptyResponse(): void
    {
        $exception = new ApiException(new SuccessResponse(), 200);

        self::assertEquals(200, $exception->getCode());
        self::assertEquals(200, $exception->getStatusCode());
        self::assertEquals('RetailCRM API Error', $exception->getMessage());
        self::assertEquals(ApiExceptionInterface::GENERIC_ERROR, $exception->getErrorType());
        self::assertFalse($exception->getErrorResponse()->success);
        self::assertEmpty($exception->getErrorResponse()->errors);
        self::assertEmpty($exception->getErrorResponse()->errorMsg);
    }

    public function testNormalResponse(): void
    {
        $response = new ErrorResponse();
        $response->errorMsg = 'Account does not exist.';

        $exception = new ApiException($response, 404);

        self::assertEquals(404, $exception->getCode());
        self::assertEquals(404, $exception->getStatusCode());
        self::assertEquals(ApiExceptionInterface::ACCOUNT_DOES_NOT_EXIST, $exception->getErrorType());
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

        $exception = new ApiException($response, 400);

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

        $exception = new ApiException($response, 400);

        self::assertEquals(400, $exception->getCode());
        self::assertEquals(400, $exception->getStatusCode());
        self::assertEquals(ApiExceptionInterface::MISSING_PARAMETER, $exception->getErrorType());
        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
        self::assertFalse($exception->getErrorResponse()->success);
    }

    public function testMissingApiKey(): void
    {
        $response = new ErrorResponse();
        $response->errorMsg = "\"apiKey\" is missing.";

        $exception = new ApiException($response, 400);

        self::assertEquals(400, $exception->getCode());
        self::assertEquals(400, $exception->getStatusCode());
        self::assertEquals(ApiExceptionInterface::MISSING_CREDENTIALS, $exception->getErrorType());
        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
        self::assertFalse($exception->getErrorResponse()->success);
    }

    public function testValidationError(): void
    {
        $response = new ErrorResponse();
        $response->errorMsg = "Errors in the entity format";
        $response->errors = ["code" => "Code prefix must match integrationCode"];

        $exception = new ApiException($response, 400);

        self::assertEquals(400, $exception->getCode());
        self::assertEquals(400, $exception->getStatusCode());
        self::assertEquals(ApiExceptionInterface::VALIDATION_ERROR, $exception->getErrorType());
        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
        self::assertFalse($exception->getErrorResponse()->success);
    }
}
