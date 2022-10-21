<?php

namespace RetailCrm\Tests\Component;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Component\Utils;

class UtilsTest extends TestCase
{
    /**
     * @dataProvider removeVersionProvider
     */
    public function testRemoveVersionFromUri(string $uri, string $expectedResult): void
    {
        $actualResult = Utils::removeVersionFromUri($uri);

        self::assertEquals($expectedResult, $actualResult);
    }

    public function removeVersionProvider(): array
    {
        return [
            [
                'https://v5gv5hv5fv5jv5v5fgv59hbfg9.retailcrm.io/api/v5',
                'https://v5gv5hv5fv5jv5v5fgv59hbfg9.retailcrm.io/api',
            ],
            [
                'https://v5gv5hv5fv5jv5v5fgv59hbfg9.retailcrm.io/api/v5/',
                'https://v5gv5hv5fv5jv5v5fgv59hbfg9.retailcrm.io/api',
            ],
            [
                'https://v5gv5hv5fv5jv5v5fgv59hbfg9.retailcrm.io',
                'https://v5gv5hv5fv5jv5v5fgv59hbfg9.retailcrm.io',
            ],
        ];
    }
}
