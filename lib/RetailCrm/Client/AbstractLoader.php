<?php

/**
 * PHP version 5.4
 *
 * Abstract API client
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Client;

use RetailCrm\Http\Client;

/**
 * PHP version 5.4
 *
 * Abstract API client class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
abstract class AbstractLoader
{
    protected $siteCode;
    protected $client;
    protected $crmUrl;

    /**
     * Init version based client
     *
     * @param string $url     api url
     * @param string $apiKey  api key
     * @param string $version api version
     * @param string $site    site code
     */
    public function __construct($url, $apiKey, $version, $site = null)
    {
        if ('/' !== $url[strlen($url) - 1]) {
            $url .= '/';
        }
        $this->crmUrl = $url;

        if (empty($version) || !in_array($version, ['v3', 'v4', 'v5'])) {
            throw new \InvalidArgumentException(
                'Version must be not empty and must be equal one of v3|v4|v5'
            );
        }

        $url = $url . 'api/' . $version;

        $this->client = new Client($url, ['apiKey' => $apiKey]);
        $this->siteCode = $site;
    }

    /**
     * Set site
     *
     * @param string $site site code
     *
     * @return void
     */
    public function setSite($site)
    {
        $this->siteCode = $site;
    }

    /**
     * Check ID parameter
     *
     * @param string $by identify by
     *
     * @throws \InvalidArgumentException
     *
     * @return bool
     */
    protected function checkIdParameter($by)
    {
        $allowedForBy = [
            'externalId',
            'id'
        ];

        if (!in_array($by, $allowedForBy, false)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Value "%s" for "by" param is not valid. Allowed values are %s.',
                    $by,
                    implode(', ', $allowedForBy)
                )
            );
        }

        return true;
    }

    /**
     * Fill params by site value
     *
     * @param string $site   site code
     * @param array  $params input parameters
     *
     * @return array
     */
    protected function fillSite($site, array $params)
    {
        if ($site) {
            $params['site'] = $site;
        } elseif ($this->siteCode) {
            $params['site'] = $this->siteCode;
        }

        return $params;
    }

    /**
     * Return current site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->siteCode;
    }

    /**
     * Getting the list of available api versions
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function availableVersions()
    {
        return $this->client->makeRequest(
            $this->crmUrl . 'api/api-versions',
            "GET",
            [],
            true
        );
    }

    /**
     * Getting the list of available api methods and stores for current key
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function credentials()
    {
        return $this->client->makeRequest(
            $this->crmUrl . 'api/credentials',
            "GET",
            [],
            true
        );
    }
}
