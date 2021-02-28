<?php

/**
 * PHP version 7.3
 *
 * @category GenerateModelsCommandTest
 * @package  RetailCrm\DevTests\Command
 */

namespace RetailCrm\DevTests\Command;

use PHPUnit\Framework\TestCase;
use RetailCrm\Dev\Command\GenerateModelsCommand;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class GenerateModelsCommandTest
 *
 * @category GenerateModelsCommandTest
 * @package  RetailCrm\DevTests\Command
 */
class GenerateModelsCommandTest extends TestCase
{
    public function testGenerateModelsCommand(): void
    {
        $tester = new CommandTester(new GenerateModelsCommand());
        $tester->execute([]);

        self::assertStringContainsString('Done, generated code for', $tester->getDisplay());
    }
}
