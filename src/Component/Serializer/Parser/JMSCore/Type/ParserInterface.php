<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Parser\JMSCore\Type;

interface ParserInterface
{
    public function parse(string $type): array;
}
