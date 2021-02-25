<?php

/**
 * PHP version 7.3
 *
 * @category GenerateModelsCommand
 * @package  RetailCrm\Api\Command
 */

namespace RetailCrm\Api\Command;

use Doctrine\Common\Annotations\AnnotationReader;
use Generator;
use Liip\MetadataParser\Builder;
use Liip\MetadataParser\ModelParser\JMSParser;
use Liip\MetadataParser\ModelParser\LiipMetadataAnnotationParser;
use Liip\MetadataParser\ModelParser\PhpDocParser;
use Liip\MetadataParser\ModelParser\ReflectionParser;
use Liip\MetadataParser\Parser;
use Liip\MetadataParser\RecursionChecker;
use Liip\Serializer\Configuration\GeneratorConfiguration;
use Liip\Serializer\DeserializerGenerator;
use Liip\Serializer\SerializerGenerator;
use Liip\Serializer\Template\Deserialization;
use Liip\Serializer\Template\Serialization;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use RegexIterator;
use RetailCrm\Api\Model\Response\Orders\OrdersCreateResponse;
use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class GenerateModelsCommand
 *
 * @category GenerateModelsCommand
 * @package  RetailCrm\Api\Command
 */
class GenerateModelsCommand extends Command
{
    /**
     * Sets description and help for a command.
     */
    protected function configure(): void
    {
        $this->setName('models:generate')
            ->setDescription('Converts all JMS models to static (de)serialization code.')
            ->setHelp('Use this command after making any changes to the models.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $models = [];
        $target = static::getTargetDirectory();

        $this->createDir($target);

        $output->writeln('Preparing a list of models to generate cache files...');
        $output->writeln(
            '<options=bold>Note:</> Request models will be omitted ' .
            'because they are being handled by FormEncoder.'
        );
        $output->writeln('');

        foreach ($this->getModelsList() as $model) {
            $output->writeln(sprintf('- Adding <fg=magenta>%s</>', $model));
            $models[] = $model;
        }

        $this->generateModelCache($models, $target);

        return 0;
    }

    /**
     * Returns a list of the models present in the library.
     *
     * @return Generator<string>
     */
    private function getModelsList(): Generator
    {
        $directory = new RecursiveDirectoryIterator(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'Model']));
        $models    = new RegexIterator(
            new RecursiveIteratorIterator($directory),
            '/^.+\.php$/i',
            RecursiveRegexIterator::GET_MATCH
        );
        $parentDir = realpath(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'Model']));

        foreach ($models as $model) {
            $className = 'RetailCrm\\Api\\Model' . str_ireplace(
                '.php',
                '',
                str_replace(
                    '/',
                    '\\',
                    str_replace($parentDir, '', realpath($model[0]))
                )
            );

            if (false === strpos($className, 'RetailCrm\\Api\\Model\\Request')) {
                yield $className;
            }
        }
    }

    /**
     * Generate models cache.
     *
     * @param string[] $classes
     * @param string   $target
     */
    private function generateModelCache(array $classes, string $target): void
    {
        $configurationArray = [
            'default_group_combinations' => [],
            'default_versions' => [],
            'classes' => [],
        ];

        foreach ($classes as $class) {
            $configurationArray['classes'][$class] = [];
        }

        $configuration = GeneratorConfiguration::createFomArray($configurationArray);
        $parsers = [new JMSParser(new AnnotationReader())];
        $builder = new Builder(new Parser($parsers), new RecursionChecker(null, []));

        $serializerGenerator = new SerializerGenerator(new Serialization(), $configuration, $target);
        $deserializerGenerator = new DeserializerGenerator(new Deserialization(), $classes, $target);
        $serializerGenerator->generate($builder);
        $deserializerGenerator->generate($builder);
    }

    /**
     * Returns target directory for the model cache.
     *
     * @return string
     */
    private static function getTargetDirectory(): string
    {
        $parentDir = implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..']);

        return implode(DIRECTORY_SEPARATOR, [realpath($parentDir), 'models']);
    }

    /**
     * Create directory
     *
     * @param string $dir
     *
     * @throws RuntimeException
     */
    private function createDir(string $dir): void
    {
        if (is_dir($dir)) {
            return;
        }

        if (false === mkdir($dir, 0777, true) && false === is_dir($dir)) {
            throw new RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }
    }
}
