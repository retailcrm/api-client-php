<?php

/**
 * PHP version 7.3
 *
 * @category CacheDirectories
 * @package  RetailCrm\Api\Enum
 */

namespace RetailCrm\Api\Enum;

/**
 * Class CacheDirectories
 *
 * @category CacheDirectories
 * @package  RetailCrm\Api\Enum
 */
final class CacheDirectories
{
    public const MAIN_DIR  = DIRECTORY_SEPARATOR . 'retailcrm_metadata_cache';
    public const JSON_DIR  = DIRECTORY_SEPARATOR . 'json';
    public const FORM_DIR = DIRECTORY_SEPARATOR . 'form';
}
