<?php

/**
 * PHP version 5.4
 *
 * Abstract API client
 *
 * @category RetailCrm
 * @package  RetailCrm
 */

namespace RetailCrm\Client;

use Psr\Log\LoggerInterface;
use RetailCrm\Http\Client;
use RetailCrm\Http\RequestOptions;

/**
 * PHP version 5.4
 *
 * Abstract API client class
 *
 * @category RetailCrm
 * @package  RetailCrm
 */
abstract class AbstractLoader
{
    /** @var string|null */
    protected $siteCode;

    /** @var \RetailCrm\Http\Client */
    protected $client;

    /** @var string */
    protected $crmUrl;

    /**
     * Init version based client
     *
     * @param string $url     api url
     * @param string $apiKey  api key
     * @param string $version api version
     * @param string $site    site code
     * @param bool   $debug   debug mode
     */
    public function __construct($url, $apiKey, $version, $site = null, $debug = false)
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

        $this->client = new Client($url, ['apiKey' => $apiKey], $debug);
        $this->siteCode = $site;
    }

    /**
     * Set request options
     *
     * @param RequestOptions $options
     */
    public function setOptions(RequestOptions $options)
    {
        $this->client->setOptions($options);
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
     * Check ID type
     *
     * @param int $id
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    protected function checkId($id)
    {
        if (!is_int($id)) {
            throw new \InvalidArgumentException(
                'Parameter `id` must be integer'
            );
        }
    }

    /**
     * Check pagination input parameters
     *
     * @param int $limit
     * @param int $page
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    protected function checkPaginationParameters($limit, $page)
    {
        $this->checkPaginationLimit($limit);

        if (!is_int($page) || 1 > $page) {
            throw new \InvalidArgumentException(
                'Parameter `page` must be an integer and must be greater than 0'
            );
        }
    }

    /**
     * Check pagination input parameter `limit`
     *
     * @param int $limit
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    protected function checkPaginationLimit($limit)
    {
        $allowedLimits = [20, 50, 100];
        if (!is_int($limit) || !in_array($limit, $allowedLimits, true)) {
            throw new \InvalidArgumentException(
                'Parameter `limit` must be an integer and contain one of the values [20, 50, 100]'
            );
        }
    }

    /**
     * Check input parameter `site`
     *
     * @param string $site
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    protected function checkSite($site)
    {
        if (!is_string($site) || '' === $site) {
            throw new \InvalidArgumentException(
                'Parameter `site` must contains a data'
            );
        }
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
     * Set logger
     *
     * @param LoggerInterface|null $logger
     */
    public function setLogger($logger)
    {
        $this->client->setLogger($logger);
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

    /**
     * Getting the system version, public and technical urls
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function systemInfo()
    {
        return $this->client->makeRequest(
            $this->crmUrl . 'api/system-info',
            "GET",
            [],
            true
        );
    }
}
