<?php

/**
 * PHP version 7.3
 *
 * @category ClearModelsCommandTest
 * @package  RetailCrm\Tests\Command
 */

namespace RetailCrm\Tests\Command;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Command\ClearModelsCommand;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class ClearModelsCommandTest
 *
 * @category ClearModelsCommandTest
 * @package  RetailCrm\Tests\Command
 */
class ClearModelsCommandTest extends TestCase
{
    public function testClearModelsCommand(): void
    {
        $tester = new CommandTester(new ClearModelsCommand());
        $tester->execute([]);

        self::assertStringContainsString('Cleaning up', $tester->getDisplay());
        self::assertStringContainsString('Done!', $tester->getDisplay());
    }
}
