<?php

namespace RetailCrm\Api\Component\SimpleConnection;

class TokenCreator
{
    public const ALGO = 'sha256';

    public static function create(string $apiKey, string $secret): string
    {
        return hash_hmac(self::ALGO, $apiKey, $secret);
    }
}
