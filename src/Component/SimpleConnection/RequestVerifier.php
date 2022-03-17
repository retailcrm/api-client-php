<?php

namespace RetailCrm\Api\Component\SimpleConnection;

use RetailCrm\Api\Model\Callback\Entity\SimpleConnection\RequestProperty\RequestConnectionRegister;

class RequestVerifier
{
    public function verify(string $secret, RequestConnectionRegister $registerRequest): bool
    {
        $hash = TokenCreator::create($registerRequest->apiKey, $secret);

        return hash_equals($hash, $registerRequest->token);
    }
}
