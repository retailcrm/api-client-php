<?php

/**
 * PHP version 7.3
 *
 * @category CustomFieldsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\CustomFields\CustomFieldDisplayArea;
use RetailCrm\Api\Enum\CustomFields\CustomFieldEntity;
use RetailCrm\Api\Enum\CustomFields\CustomFieldType;
use RetailCrm\Api\Enum\CustomFields\CustomFieldViewMode;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\CustomFields\CustomDictionary;
use RetailCrm\Api\Model\Entity\CustomFields\CustomField;
use RetailCrm\Api\Model\Entity\CustomFields\SerializedCustomDictionaryElement;
use RetailCrm\Api\Model\Filter\CustomFields\CustomDictionaryFilter;
use RetailCrm\Api\Model\Filter\CustomFields\CustomFieldFilter;
use RetailCrm\Api\Model\Request\CustomFields\CustomDictionaryCreateRequest;
use RetailCrm\Api\Model\Request\CustomFields\CustomFieldsCreateRequest;
use RetailCrm\Api\Model\Request\CustomFields\CustomFieldsDictionariesRequest;
use RetailCrm\Api\Model\Request\CustomFields\CustomFieldsRequest;
use RetailCrm\Test\TestClientFactory;

/**
 * Class CustomFieldsTest
 *
 * @category CustomFieldsTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class CustomFieldsTest extends AbstractApiResourceGroupTest
{
    public function testList()
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 1,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "customFields": [
    {
      "name": "бонус",
      "code": "bonus",
      "required": false,
      "inFilter": true,
      "inList": true,
      "inGroupActions": false,
      "type": "string",
      "entity": "order",
      "ordering": 50,
      "displayArea": "customer",
      "viewMode": "editable"
    }
  ]
}
EOF;

        $request = new CustomFieldsRequest();
        $request->page = 1;
        $request->limit = 20;
        $request->filter = new CustomFieldFilter();
        $request->filter->entity = 'order';
        $request->filter->viewMode = ['editable'];
        $request->filter->displayArea = ['customer'];
        $request->filter->type = ['string'];
        $request->filter->code = 'bonus';
        $request->filter->name = 'бонус';

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('custom-fields')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(static::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->customFields->list($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDictionaries()
    {
        $json = <<<'EOF'
{
  "success": true,
  "pagination": {
    "limit": 20,
    "totalCount": 1,
    "currentPage": 1,
    "totalPageCount": 1
  },
  "customDictionaries": [
    {
      "name": "test22",
      "code": "test22",
      "elements": [
        {
          "name": "09:00 - 12:00",
          "code": "test",
          "ordering": 10
        },
        {
          "name": "13:00 - 15:00",
          "code": "test2",
          "ordering": 20
        },
        {
          "name": "alarm_01",
          "code": "ms_alarm_01",
          "ordering": 50
        },
        {
          "name": "Справочник-alarm",
          "code": "ms_spravochnik-alarm",
          "ordering": 50
        }
      ]
    }
  ]
}
EOF;

        $request = new CustomFieldsDictionariesRequest();
        $request->page = 1;
        $request->limit = 20;
        $request->filter = new CustomDictionaryFilter();
        $request->filter->code = 'test22';
        $request->filter->name = 'test22';

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('custom-fields/dictionaries')
                ->setMethod(RequestMethod::GET)
                ->setQueryParams(static::encodeFormArray($request)),
            static::responseJson(200, $json)
        );

        $client    = TestClientFactory::createClient($mock);
        $response  = $client->customFields->dictionaries($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDictionariesCreate()
    {
        $json = <<<'EOF'
{
  "success": true,
  "code": "dictionary"
}
EOF;

        $request                   = new CustomDictionaryCreateRequest();
        $dictionary                = new CustomDictionary();
        $element                   = new SerializedCustomDictionaryElement();
        $element->name             = 'test_1';
        $element->code             = 'test_1';
        $element->ordering         = 10;
        $dictionary->name          = 'TestDict';
        $dictionary->code          = 'test_dict';
        $dictionary->elements      = [$element];
        $request->customDictionary = $dictionary;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('custom-fields/dictionaries/create')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client    = TestClientFactory::createClient($mock);
        $response  = $client->customFields->dictionariesCreate($dictionary);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDictionariesGet()
    {
        $json = <<<'EOF'
{
  "success": true,
  "customDictionary": {
    "name": "test",
    "code": "test",
    "elements": [
      {
        "name": "09:00 - 12:00",
        "code": "test",
        "ordering": 10
      },
      {
        "name": "13:00 - 15:00",
        "code": "test2",
        "ordering": 20
      }
    ]
  }
}
EOF;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('custom-fields/dictionaries/test')
                ->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client    = TestClientFactory::createClient($mock);
        $response  = $client->customFields->dictionariesGet('test');

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testDictionariesEdit()
    {
        $json = <<<'EOF'
{
  "success": true,
  "code": "dictionary"
}
EOF;

        $request                   = new CustomDictionaryCreateRequest();
        $dictionary                = new CustomDictionary();
        $element                   = new SerializedCustomDictionaryElement();
        $element->name             = 'test_1';
        $element->code             = 'test_1';
        $element->ordering         = 10;
        $dictionary->name          = 'TestDict';
        $dictionary->elements      = [$element];
        $request->customDictionary = $dictionary;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('custom-fields/dictionaries/test_dict/edit')
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client    = TestClientFactory::createClient($mock);
        $response  = $client->customFields->dictionariesEdit('test_dict', $dictionary);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testCreate()
    {
        $json = <<<'EOF'
{
  "success": true,
  "code": "dictionary"
}
EOF;

        $request               = new CustomFieldsCreateRequest();
        $field                 = new CustomField();
        $field->name           = 'Description';
        $field->code           = 'description';
        $field->type           = CustomFieldType::STRING;
        $field->ordering       = 10;
        $field->displayArea    = CustomFieldDisplayArea::CUSTOMER;
        $field->viewMode       = CustomFieldViewMode::EDITABLE;
        $field->inFilter       = true;
        $field->inList         = true;
        $field->inGroupActions = true;
        $request->customField  = $field;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher(sprintf('custom-fields/%s/create', CustomFieldEntity::CUSTOMER))
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client    = TestClientFactory::createClient($mock);
        $response  = $client->customFields->create(CustomFieldEntity::CUSTOMER, $field);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testGet()
    {
        $json = <<<'EOF'
{
  "success": true,
  "customField": {
    "name": "testGalka",
    "code": "galka",
    "required": false,
    "inFilter": true,
    "inList": true,
    "inGroupActions": false,
    "type": "boolean",
    "entity": "order",
    "default": "false",
    "ordering": 50,
    "displayArea": "customer",
    "viewMode": "editable"
  }
}
EOF;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher('custom-fields/order/galka')
                ->setMethod(RequestMethod::GET),
            static::responseJson(200, $json)
        );

        $client   = TestClientFactory::createClient($mock);
        $response = $client->customFields->get(CustomFieldEntity::ORDER, 'galka');

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testEdit()
    {
        $json = <<<'EOF'
{
  "success": true,
  "code": "dictionary"
}
EOF;

        $request               = new CustomFieldsCreateRequest();
        $field                 = new CustomField();
        $field->name           = 'Description';
        $field->type           = CustomFieldType::STRING;
        $field->ordering       = 10;
        $field->viewMode       = CustomFieldViewMode::EDITABLE;
        $field->inFilter       = true;
        $field->inList         = true;
        $field->inGroupActions = true;
        $request->customField  = $field;

        $mock = static::getMockClient();
        $mock->on(
            static::createRequestMatcher(
                sprintf('custom-fields/%s/%s/edit', CustomFieldEntity::CUSTOMER, 'description')
            )
                ->setMethod(RequestMethod::POST)
                ->setBody(static::encodeForm($request)),
            static::responseJson(200, $json)
        );

        $client    = TestClientFactory::createClient($mock);
        $response  = $client->customFields->edit(CustomFieldEntity::CUSTOMER, 'description', $field);

        self::assertModelEqualsToResponse($json, $response);
    }
}
