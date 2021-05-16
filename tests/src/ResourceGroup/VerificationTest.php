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

        $mock = static::createApiMockBuilder('verification/sms/confirm');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
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

        $mock = static::createApiMockBuilder('verification/sms/1/status');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->verification->smsStatus('1');

        self::assertModelEqualsToResponse($json, $response);
    }
}
