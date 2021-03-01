<?php

/**
 * PHP version 7.3
 *
 * @category GenerateModelsCommand
 * @package  RetailCrm\Dev\Command
 */

namespace RetailCrm\Dev\Command;

use Doctrine\Common\Annotations\AnnotationReader;
use Generator;
use Liip\MetadataParser\Builder;
use Liip\MetadataParser\Parser;
use Liip\MetadataParser\RecursionChecker;
use Liip\Serializer\Configuration\GeneratorConfiguration;
use Liip\Serializer\Template\Deserialization;
use Liip\Serializer\Template\Serialization;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Dev\Component\PhpFilesIterator;
use RetailCrm\Dev\Component\Serializer\Generator\DeserializerGenerator;
use RetailCrm\Dev\Component\Serializer\Generator\SerializerGenerator;
use RetailCrm\Dev\Component\Serializer\ModelsChecksumGenerator;
use RetailCrm\Dev\Component\Serializer\Parser\JMSParser;
use RetailCrm\Dev\Component\Serializer\Template\CustomDeserialization;
use RetailCrm\Dev\Component\Serializer\Template\CustomSerialization;
use RetailCrm\Dev\Component\Utils as DevUtils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class GenerateModelsCommand
 *
 * @category GenerateModelsCommand
 * @package  RetailCrm\Dev\Command
 * @internal
 *
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 *
 * @see There is no need to refactor generator into separate service. Its logic won't be used anywhere else.
 */
class GenerateModelsCommand extends AbstractModelsProcessorCommand
{
    /**
     * Request models and filters are being handled by the FormEncoder component.
     * They don't require caching at all. That's why we should ignore them - there is no need to
     * waste inodes for the useless cache files.
     */
    private const IGNORED_NAMESPACES = [
        'RetailCrm\\Api\\Model\\Request',
        'RetailCrm\\Api\\Model\\Filter'
    ];

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
        $verbose = static::isVerbose($output);
        $target = Utils::getModelsCacheDirectory();
        $oldChecksums = ModelsChecksumGenerator::getStoredChecksums();
        $newChecksums = ModelsChecksumGenerator::generateChecksums();

        if (!is_dir($target)) {
            static::createDir($target);
            file_put_contents(implode(DIRECTORY_SEPARATOR, [$target, '.gitkeep']), '');
        }

        $output->writeln('Preparing a list of models to generate cache files...');
        $output->writeln(
            '<options=bold>Note:</> Request models will be omitted ' .
            'because they are being handled by FormEncoder.'
        );
        $output->writeln('');

        foreach ($this->getModelsList($oldChecksums, $newChecksums) as $model) {
            if ($verbose) {
                $output->writeln(sprintf('- Adding <fg=magenta>%s</>', $model));
            }

            $models[] = $model;
        }

        if ($verbose && count($models) > 0) {
            $output->writeln('');
        }

        if (count($models) === 0) {
            $output->writeln('<info>No changes were found; skipping generation...</info>');
            $output->writeln('');
        }

        $this->generateModelCache($models, $target);
        ModelsChecksumGenerator::saveChecksums(ModelsChecksumGenerator::generateChecksums());
        $output->writeln(sprintf('<fg=black;bg=green> ✓ Done, generated code for %d models.</>', count($models)));

        return 0;
    }

    /**
     * Returns a list of the models present in the library.
     *
     * @param array<string, string> $oldChecksums
     * @param array<string, string> $newChecksums
     *
     * @return Generator<string>
     */
    private function getModelsList(array $oldChecksums, array $newChecksums): Generator
    {
        $classes   = new PhpFilesIterator(DevUtils::getModelsDirectory());

        foreach ($classes as $model) {
            if (!array_key_exists('fqn', $model)) {
                continue;
            }

            if (
                !static::isNamespaceIgnored($model['fqn']) &&
                !static::shouldGenerateForModel($oldChecksums, $newChecksums, $model['fqn'])
            ) {
                yield $model['fqn'];
            }
        }
    }

    /**
     * Generate models cache.
     *
     * @param string[] $classes
     * @param string   $target
     *
     * @throws \Exception
     */
    private function generateModelCache(array $classes, string $target): void
    {
        if (empty($classes)) {
            return;
        }

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

        $marshalGenerator   = new SerializerGenerator(
            new Serialization(),
            new CustomSerialization(),
            $configuration,
            $target
        );
        $unmarshalGenerator = new DeserializerGenerator(
            new Deserialization(),
            new CustomDeserialization(),
            $classes,
            $target
        );
        $marshalGenerator->generate($builder);
        $unmarshalGenerator->generate($builder);
    }

    /**
     * Returns true if models in provided namespace should be ignored.
     *
     * @param string $namespace
     *
     * @return bool
     */
    private static function isNamespaceIgnored(string $namespace): bool
    {
        foreach (static::IGNORED_NAMESPACES as $ignoredNamespace) {
            if (false !== strpos($namespace, $ignoredNamespace)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns true if cache for model should be generated.
     *
     * @param array<string, string> $oldChecksums
     * @param array<string, string> $newChecksums
     * @param string                $className
     *
     * @return bool
     */
    private static function shouldGenerateForModel(array $oldChecksums, array $newChecksums, string $className): bool
    {
        $serializerFile = SerializerGenerator::buildSerializerFunctionName($className, null, []) . '.php';
        $deserializerFile = DeserializerGenerator::buildDeserializerFunctionName($className) . '.php';

        if (
            !is_file(implode(DIRECTORY_SEPARATOR, [Utils::getModelsCacheDirectory(), $serializerFile])) ||
            !is_file(implode(DIRECTORY_SEPARATOR, [Utils::getModelsCacheDirectory(), $deserializerFile]))
        ) {
            return false;
        }

        return (isset($oldChecksums[$className]) && $oldChecksums[$className] === $newChecksums[$className]);
    }
}
