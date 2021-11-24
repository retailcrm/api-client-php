<?php

/**
 * PHP version 7.3
 *
 * @category APIVersionsResponse
 * @package  RetailCrm\TestUtils
 */

namespace RetailCrm\TestUtils;

/**
 * Class APIVersionsResponse
 *
 * @category APIVersionsResponse
 * @package  RetailCrm\TestUtils
 */
class APIVersionsResponse
{
    /** @var bool */
    public $success;

    /** @var string[] */
    public $versions;

    /**
     * @param bool     $success
     * @param string[] $versions
     */
    public function __construct(bool $success, array $versions)
    {
        $this->success = $success;
        $this->versions = $versions;
    }
}
