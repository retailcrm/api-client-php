<?php

/**
 * PHP version 7.3
 *
 * @category ErrorTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Exception\Api\AccountDoesNotExistException;
use RetailCrm\Api\Exception\Api\ApiErrorException;
use RetailCrm\Api\Exception\ApiException;
use RetailCrm\Api\Model\Request\Costs\CostsCreateRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class ErrorTest. Doesn't test any section; it's sole purpose is to check how error handling works for
 * responses with errors from API.
 *
 * @category ErrorTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class ErrorTest extends AbstractApiResourceGroupTestCase
{
    public function testErrorResponseHandling(): void
    {
        $json = <<<'EOF'
{
    "success": false,
    "errorMsg": "Method Not Allowed"
}
EOF;
        $this->expectException(ApiErrorException::class);
        $this->expectExceptionCode(405);
        $this->expectExceptionMessage('Method Not Allowed');

        $mock = static::createUnversionedApiMockBuilder('api-versions');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(405)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $client->api->apiVersions();
    }

    public function testPostErrorResponseHandling(): void
    {
        $json = <<<'EOF'
{
    "success": false,
    "errorMsg": "Invalid data"
}
EOF;
        $this->expectException(ApiErrorException::class);
        $this->expectExceptionCode(405);
        $this->expectExceptionMessage('Invalid data');

        $mock = static::createApiMockBuilder('costs/create');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(405)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $client->costs->create(new CostsCreateRequest());
    }

    public function testHtmlAccountDoesntExistHandling(): void
    {
        $html = <<<'EOF'
<html>

<head>
	<title>405 Not Allowed</title>
</head>

<body>
	<center>
		<h1>405 Not Allowed</h1>
	</center>
	<hr>
	<center>nginx/1.18.0</center>
</body>

</html>
EOF;
        $this->expectException(AccountDoesNotExistException::class);
        $this->expectExceptionCode(405);
        $this->expectExceptionMessage('Account does not exist');

        $mock = static::createApiMockBuilder('costs/create');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(405)
            ->withHeader('Content-Type', 'text/html; charset=utf-8')
            ->withBody($html);

        $client = TestClientFactory::createClient($mock->getClient());
        $client->costs->create(new CostsCreateRequest());
    }
}
