<?php

/**
 * PHP version 5.4
 *
 * Core class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Methods;

/**
 * PHP version 5.4
 *
 * Core class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
trait Core
{
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
}
