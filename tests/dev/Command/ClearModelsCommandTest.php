<?php

/**
 * PHP version 7.3
 *
 * @category ClearModelsCommandTest
 * @package  RetailCrm\DevTests\Command
 */

namespace RetailCrm\DevTests\Command;

use PHPUnit\Framework\TestCase;
use RetailCrm\Dev\Command\ClearModelsCommand;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class ClearModelsCommandTest
 *
 * @category ClearModelsCommandTest
 * @package  RetailCrm\DevTests\Command
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
