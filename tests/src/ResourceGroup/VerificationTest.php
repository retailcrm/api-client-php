<?php

/**
 * PHP version 7.3
 *
 * @category VerificationTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Verification\SmsVerificationConfirm;
use RetailCrm\Api\Model\Request\Verification\SmsVerificationConfirmRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class VerificationTest
 *
 * @category VerificationTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class VerificationTest extends AbstractApiResourceGroupTestCase
{
    public function testSmsConfirm(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "verification": {
      "createdAt": "2021-03-05 12:00:00",
      "verifiedAt": "2021-03-05 12:00:00",
      "checkId": "checkId",
      "actionType": "register"
  }
}
EOF;
        $confirm = new SmsVerificationConfirm();
        $confirm->code = 'code';
        $confirm->checkId = 'checkId';

        $request = new SmsVerificationConfirmRequest($confirm);

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('verification/sms/confirm')
                ->setMethod(RequestMethod::POST)
                ->setBody(self::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->verification->smsConfirm($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testSmsStatus(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "verification": {
      "createdAt": "2021-03-05 12:00:00",
      "verifiedAt": "2021-03-05 12:00:00",
      "checkId": "checkId",
      "actionType": "register"
  }
}
EOF;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('verification/sms/1/status')
                ->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->verification->smsStatus('1');

        self::assertModelEqualsToResponse($json, $response);
    }
}
