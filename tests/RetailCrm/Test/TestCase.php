<?php

namespace RetailCrm\Test;

use RetailCrm\ApiClient;

class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Return ApiClient object
     *
     * @param  string    $url (default: null)
     * @param  string    $apiKey (default: null)
     * @return ApiClient
     */
    public static function getApiClient($url = null, $apiKey = null)
    {
        return new ApiClient($url ?: $_SERVER['CRM_URL'], $apiKey ?: $_SERVER['CRM_API_KEY']);
    }
}