<?php

/**
 * PHP version 7.3
 *
 * @category TelephonyTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use DateTime;
use RetailCrm\Api\Enum\NumericBoolean;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Enum\Telephony\CallEventType;
use RetailCrm\Api\Enum\Telephony\CallResult;
use RetailCrm\Api\Model\Entity\Telephony\Call;
use RetailCrm\Api\Model\Entity\Telephony\CallEvent;
use RetailCrm\Api\Model\Request\Telephony\TelephonyCallEventRequest;
use RetailCrm\Api\Model\Request\Telephony\TelephonyCallsUploadRequest;
use RetailCrm\Api\Model\Request\Telephony\TelephonyManagerRequest;
use RetailCrm\Dev\TestUtils\Factory\TestClientFactory;
use RetailCrm\Dev\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Class TelephonyTest
 *
 * @category TelephonyTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class TelephonyTest extends AbstractApiResourceGroupTestCase
{
    public function testCallEvent(): void
    {
        $json = <<<'EOF'
{
  "success": true
}
EOF;

        $event          = new CallEvent();
        $event->site    = 'aliexpress';
        $event->type    = CallEventType::IN;
        $event->phone   = '88005553125';
        $event->userIds = [27];

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('telephony/call/event')
                ->setMethod(RequestMethod::POST)
                ->setBody(self::encodeForm(new TelephonyCallEventRequest($event))),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->telephony->callEvent($event);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCallsUpload(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "processedCallsCount": 1
}
EOF;

        $call                  = new Call();
        $call->externalId      = 'test_call_external_id';
        $call->date            = new DateTime();
        $call->type            = CallEventType::IN;
        $call->phone           = '88005553125';
        $call->userId          = 27;
        $call->result          = CallResult::ANSWERED;
        $call->duration        = 60;
        $call->durationWaiting = 10;
        $call->recordUrl       = 'https://examle.com/test.mp3';
        $call->site            = 'aliexpress';

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('telephony/calls/upload')
                ->setMethod(RequestMethod::POST)
                ->setBody(self::encodeForm(new TelephonyCallsUploadRequest([$call]))),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->telephony->callsUpload([$call]);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testManager(): void
    {
        $json = <<<'EOF'
{
  "success": true,
  "manager": {
      "id": 1,
      "firstName": "John",
      "lastName": "John",
      "patronymic": "John",
      "email": "test@examle.com",
      "code": "12"
  },
  "customer": {
      "id": 1,
      "externalId": "1",
      "firstName": "John",
      "lastName": "John",
      "patronymic": "John",
      "email": "test@examle.com",
      "phones": [
        {
            "number": "88005553125"
        }
      ]
  },
  "links": {
    "newOrderLink": "https://azgalot.retailcrm.ru/orders/add?phone=88005553125",
    "newCustomerLink": "https://azgalot.retailcrm.ru/customers/add?phone=88005553125"
  }
}
EOF;

        $request               = new TelephonyManagerRequest();
        $request->phone        = '88005553125';
        $request->details      = NumericBoolean::TRUE;
        $request->ignoreStatus = NumericBoolean::TRUE;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('telephony/manager')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(self::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->telephony->manager($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
