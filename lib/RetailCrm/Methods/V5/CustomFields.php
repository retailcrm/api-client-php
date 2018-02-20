<?php

/**
 * PHP version 5.4
 *
 * CustomFields
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V5;

/**
 * PHP version 5.4
 *
 * CustomFields class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait CustomFields
{
    /**
     * Get custom fields list
     *
     * @param array $filter
     * @param null  $limit
     * @param null  $page
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customFieldsList(array $filter = [], $limit = null, $page = null)
    {
        $parameters = [];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/custom-fields',
            "GET",
            $parameters
        );
    }

    /**
     * Create custom field
     *
     * @param $entity
     * @param $customField
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customFieldsCreate($entity, $customField)
    {
        if (!count($customField) ||
            empty($customField['code']) ||
            empty($customField['name']) ||
            empty($customField['type'])
        ) {
            throw new \InvalidArgumentException(
                'Parameter `customField` must contain a data & fields `code`, `name` & `type` must be set'
            );
        }

        if (empty($entity) || !in_array($entity, ['customer', 'order'])) {
            throw new \InvalidArgumentException(
                'Parameter `entity` must contain a data & value must be `order` or `customer`'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/custom-fields/$entity/create",
            "POST",
            ['customField' => json_encode($customField)]
        );
    }

    /**
     * Edit custom field
     *
     * @param $entity
     * @param $customField
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customFieldsEdit($entity, $customField)
    {
        if (!count($customField) || empty($customField['code'])) {
            throw new \InvalidArgumentException(
                'Parameter `customField` must contain a data & fields `code` must be set'
            );
        }

        if (empty($entity) || !in_array($entity, ['customer', 'order'])) {
            throw new \InvalidArgumentException(
                'Parameter `entity` must contain a data & value must be `order` or `customer`'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/custom-fields/$entity/{$customField['code']}/edit",
            "POST",
            ['customField' => json_encode($customField)]
        );
    }

    /**
     * Get custom field
     *
     * @param $entity
     * @param $code
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customFieldsGet($entity, $code)
    {
        if (empty($code)) {
            throw new \InvalidArgumentException(
                'Parameter `code` must be not empty'
            );
        }

        if (empty($entity) || !in_array($entity, ['customer', 'order'])) {
            throw new \InvalidArgumentException(
                'Parameter `entity` must contain a data & value must be `order` or `customer`'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/custom-fields/$entity/$code",
            "GET"
        );
    }

    /**
     * Get custom dictionaries list
     *
     * @param array $filter
     * @param null  $limit
     * @param null  $page
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customDictionariesList(array $filter = [], $limit = null, $page = null)
    {
        $parameters = [];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/custom-fields/dictionaries',
            "GET",
            $parameters
        );
    }

    /**
     * Create custom dictionary
     *
     * @param $customDictionary
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customDictionariesCreate($customDictionary)
    {
        if (!count($customDictionary) ||
            empty($customDictionary['code']) ||
            empty($customDictionary['elements'])
        ) {
            throw new \InvalidArgumentException(
                'Parameter `dictionary` must contain a data & fields `code` & `elemets` must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/custom-fields/dictionaries/create",
            "POST",
            ['customDictionary' => json_encode($customDictionary)]
        );
    }

    /**
     * Edit custom dictionary
     *
     * @param $customDictionary
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customDictionariesEdit($customDictionary)
    {
        if (!count($customDictionary) ||
            empty($customDictionary['code']) ||
            empty($customDictionary['elements'])
        ) {
            throw new \InvalidArgumentException(
                'Parameter `dictionary` must contain a data & fields `code` & `elemets` must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/custom-fields/dictionaries/{$customDictionary['code']}/edit",
            "POST",
            ['customDictionary' => json_encode($customDictionary)]
        );
    }

    /**
     * Get custom dictionary
     *
     * @param $code
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customDictionariesGet($code)
    {
        if (empty($code)) {
            throw new \InvalidArgumentException(
                'Parameter `code` must be not empty'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/custom-fields/dictionaries/$code",
            "GET"
        );
    }
}
