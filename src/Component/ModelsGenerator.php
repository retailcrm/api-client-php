<?php

/**
 * PHP version 7.3
 *
 * @category ModelsGenerator
 * @package  RetailCrm\Api\Component
 */

namespace RetailCrm\Api\Component;

use Doctrine\Common\Annotations\AnnotationReader;
use Liip\MetadataParser\Builder;
use Liip\MetadataParser\Parser;
use Liip\MetadataParser\RecursionChecker;
use Liip\Serializer\Configuration\GeneratorConfiguration;
use Liip\Serializer\Template\Deserialization;
use Liip\Serializer\Template\Serialization;
use RetailCrm\Api\Component\Utils;
use RetailCrm\Api\Component\Serializer\Generator\DeserializerGenerator;
use RetailCrm\Api\Component\Serializer\Generator\SerializerGenerator;
use RetailCrm\Api\Component\Serializer\ModelsChecksumGenerator;
use RetailCrm\Api\Component\Serializer\Parser\JMSParser;
use RetailCrm\Api\Component\Serializer\Template\CustomDeserialization;
use RetailCrm\Api\Component\Serializer\Template\CustomSerialization;
use RetailCrm\Api\Component\Utils as DevUtils;
use RuntimeException;

/**
 * Class ModelsGenerator
 *
 * @category ModelsGenerator
 * @package  RetailCrm\Api\Component
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ModelsGenerator
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

    /** @var string[] */
    private $models;

    /** @var array<string, string> */
    private $oldChecksums;

    /** @var array<string, string> */
    private $newChecksums;

    /** @var bool */
    private $generateAll;

    /**
     * ModelsGenerator constructor.
     *
     * @param bool $generateAll
     */
    public function __construct(bool $generateAll)
    {
        $this->generateAll = $generateAll;
    }

    public function generate(): void
    {
        $target = Utils::getModelsCacheDirectory();
        $this->calculateChecksums();

        if (!is_dir($target)) {
            static::createDir($target);
            file_put_contents(implode(DIRECTORY_SEPARATOR, [$target, '.gitkeep']), '');
        }

        self::generateModelCache($this->models, $target);
        ModelsChecksumGenerator::saveChecksums($this->newChecksums);
    }

    /**
     * Returns a list of the models present in the library.
     */
    public function loadModelsList(): void
    {
        $this->models = [];
        $classes      = new PhpFilesIterator(DevUtils::getModelsDirectory());

        foreach ($classes as $model) {
            if (!array_key_exists('fqn', $model)) {
                continue;
            }

            if (
                !static::isNamespaceIgnored($model['fqn']) &&
                $this->shouldGenerateForModel($model['fqn'])
            ) {
                $this->models[] = $model['fqn'];
            }
        }
    }

    /**
     * @return string[]
     */
    public function getModels(): array
    {
        return $this->models;
    }

    /**
     * Calculate models checksums
     */
    private function calculateChecksums(): void
    {
        $this->newChecksums = ModelsChecksumGenerator::generateChecksums();

        if (!$this->generateAll) {
            $this->oldChecksums = ModelsChecksumGenerator::getStoredChecksums();
        }
    }

    /**
     * Returns true if cache for model should be generated.
     *
     * @param string $className
     *
     * @return bool
     */
    private function shouldGenerateForModel(string $className): bool
    {
        if ($this->generateAll) {
            return true;
        }

        $serializerFile = SerializerGenerator::buildSerializerFunctionName($className, null, []) . '.php';
        $deserializerFile = DeserializerGenerator::buildDeserializerFunctionName($className) . '.php';

        if (
            !is_file(implode(DIRECTORY_SEPARATOR, [Utils::getModelsCacheDirectory(), $serializerFile])) ||
            !is_file(implode(DIRECTORY_SEPARATOR, [Utils::getModelsCacheDirectory(), $deserializerFile]))
        ) {
            return true;
        }

        return (
            isset($this->oldChecksums[$className]) &&
            $this->oldChecksums[$className] !== $this->newChecksums[$className]
        );
    }

    /**
     * Generate models cache.
     *
     * @param string[] $classes
     * @param string   $target
     *
     * @throws \Exception
     */
    private static function generateModelCache(array $classes, string $target): void
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
     * Create directory
     *
     * @param string $dir
     *
     * @throws RuntimeException
     */
    private static function createDir(string $dir): void
    {
        if (is_dir($dir)) {
            return;
        }

        if (false === mkdir($dir, 0777, true) && false === is_dir($dir)) {
            throw new RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }
    }
}
