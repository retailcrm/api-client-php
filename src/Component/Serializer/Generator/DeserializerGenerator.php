<?php

/**
 * PHP version 7.3
 *
 * @category DeserializerGenerator
 * @package  RetailCrm\Api\Component\Serializer\Generator
 */

namespace RetailCrm\Api\Component\Serializer\Generator;

use Liip\MetadataParser\Builder;
use Liip\MetadataParser\Metadata\ClassMetadata;
use Liip\MetadataParser\Metadata\PropertyMetadata;
use Liip\MetadataParser\Metadata\PropertyTypeArray;
use Liip\MetadataParser\Metadata\PropertyTypeClass;
use Liip\MetadataParser\Metadata\PropertyTypeDateTime;
use Liip\MetadataParser\Metadata\PropertyTypePrimitive;
use Liip\MetadataParser\Metadata\PropertyTypeUnknown;
use Liip\MetadataParser\Reducer\TakeBestReducer;
use Liip\Serializer\Path\ArrayPath;
use Liip\Serializer\Path\ModelPath;
use Liip\Serializer\Template\Deserialization;
use RetailCrm\Api\Component\Serializer\Template\CustomDeserialization;
use RetailCrm\Api\Component\Serializer\Type\PropertyTypeMixed;
use RetailCrm\Api\Interfaces\Orders\CustomerInterface;
use RetailCrm\Api\Model\Entity\Customers\Customer;
use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate;
use RuntimeException;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class DeserializerGenerator
 *
 * @category DeserializerGenerator
 * @package  RetailCrm\Api\Component\Serializer\Generator
 * @license  https://github.com/liip/serializer/blob/master/LICENSE MIT License
 * @author   Liip <https://github.com/liip>
 * @author   Pavel Kovalenko
 * @see      https://github.com/liip/serializer
 * @internal
 *
 * @SuppressWarnings(PHPMD)
 */
class DeserializerGenerator
{
    private const FILENAME_PREFIX = 'deserialize';

    /**
     * @var Deserialization
     */
    private $templating;

    /**
     * @var \RetailCrm\Api\Component\Serializer\Template\CustomDeserialization
     */
    private $customTemplating;

    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * @var Builder
     */
    private $metadataBuilder;

    /**
     * This is a list of fqn classnames
     *
     * I.e.
     *
     * [
     *    Product::class,
     * ];
     *
     * @var string[]
     */
    private $classesToGenerate;

    /**
     * @var string
     */
    private $cacheDirectory;

    /**
     * @param \Liip\Serializer\Template\Deserialization                          $templating
     * @param \RetailCrm\Api\Component\Serializer\Template\CustomDeserialization $customTemplating
     * @param string[]                                                           $classesToGenerate
     * @param string                                                             $cacheDirectory
     */
    public function __construct(
        Deserialization $templating,
        CustomDeserialization $customTemplating,
        array $classesToGenerate,
        string $cacheDirectory
    ) {
        $this->templating = $templating;
        $this->customTemplating = $customTemplating;
        $this->classesToGenerate = $classesToGenerate;
        $this->cacheDirectory = $cacheDirectory;
        $this->filesystem = new Filesystem();
    }

    /**
     * @param string $className
     *
     * @return string
     */
    public static function buildDeserializerFunctionName(string $className): string
    {
        return static::FILENAME_PREFIX . '_' . str_replace('\\', '_', $className);
    }

    /**
     * @param \Liip\MetadataParser\Builder $metadataBuilder
     *
     * @throws \Exception
     */
    public function generate(Builder $metadataBuilder): void
    {
        $this->metadataBuilder = $metadataBuilder;

        $this->filesystem->mkdir($this->cacheDirectory);

        foreach ($this->classesToGenerate as $className) {
            // we do not use the oldest version reducer here and hope for the best
            // otherwise we end up with generated property names for accessor methods
            $classMetadata = $metadataBuilder->build($className, [
                new TakeBestReducer(),
            ]);
            $this->writeFile($classMetadata);
        }
    }

    /**
     * @param \Liip\MetadataParser\Metadata\ClassMetadata $classMetadata
     *
     * @throws \Exception
     */
    private function writeFile(ClassMetadata $classMetadata): void
    {
        if (count($classMetadata->getConstructorParameters())) {
            throw new RuntimeException(sprintf(
                'We currently do not support deserializing when the root class has a non-empty constructor. Class %s',
                $classMetadata->getClassName()
            ));
        }

        $functionName = static::buildDeserializerFunctionName($classMetadata->getClassName());
        $arrayPath = new ArrayPath('jsonData');

        $code = $this->templating->renderFunction(
            $functionName,
            $classMetadata->getClassName(),
            (string) $arrayPath,
            $this->generateCodeForClass($classMetadata, $arrayPath, new ModelPath('model'))
        );

        $this->filesystem->dumpFile(sprintf('%s/%s.php', $this->cacheDirectory, $functionName), $code);
    }

    /**
     * @param \Liip\MetadataParser\Metadata\ClassMetadata $classMetadata
     * @param \Liip\Serializer\Path\ArrayPath             $arrayPath
     * @param \Liip\Serializer\Path\ModelPath             $modelPath
     * @param mixed[]                                     $stack
     *
     * @return string
     * @throws \Exception
     */
    private function generateCodeForClass(
        ClassMetadata $classMetadata,
        ArrayPath $arrayPath,
        ModelPath $modelPath,
        array $stack = []
    ): string {
        $stack[$classMetadata->getClassName()] = ($stack[$classMetadata->getClassName()] ?? 0) + 1;

        $constructorArgumentNames = [];
        $initCode = '';
        $code = '';

        foreach ($classMetadata->getProperties() as $propertyMetadata) {
            $propertyArrayPath = $arrayPath->withFieldName($propertyMetadata->getSerializedName());

            if ($classMetadata->hasConstructorParameter($propertyMetadata->getName())) {
                $argument = $classMetadata->getConstructorParameter($propertyMetadata->getName());
                $default = var_export($argument->isRequired() ? null : $argument->getDefaultValue(), true);
                $tempVariable = ModelPath::tempVariable([(string) $modelPath, $propertyMetadata->getName()]);
                $constructorArgumentNames[$propertyMetadata->getName()] = (string) $tempVariable;

                $initCode .= $this->templating->renderArgument(
                    (string) $tempVariable,
                    $default,
                    $this->generateCodeForField($propertyMetadata, $propertyArrayPath, $tempVariable, $stack)
                );
            } else {
                $code .= $this->generateCodeForProperty($propertyMetadata, $propertyArrayPath, $modelPath, $stack);
            }
        }

        foreach ($classMetadata->getPostDeserializeMethods() as $method) {
            $code .= $this->templating->renderPostMethod((string) $modelPath, $method);
        }

        $constructorArguments = [];

        foreach ($classMetadata->getConstructorParameters() as $definition) {
            if (array_key_exists($definition->getName(), $constructorArgumentNames)) {
                $constructorArguments[] = $constructorArgumentNames[$definition->getName()];
                continue;
            }

            if ($definition->isRequired()) {
                throw new RuntimeException(sprintf(
                    'Unknown constructor argument "%s" in "%s(%s)"',
                    $definition->getName(),
                    $classMetadata->getClassName(),
                    implode(', ', array_keys($constructorArgumentNames))
                ));
            }

            $constructorArguments[] = var_export($definition->getDefaultValue(), true);
        }

        if (count($constructorArgumentNames) > 0) {
            $code .= $this->templating->renderUnset(array_values($constructorArgumentNames));
        }

        if (CustomerInterface::class === $classMetadata->getClassName()) {
            return $this->generateCustomerInterface($classMetadata, $arrayPath, $modelPath, $initCode, $stack);
        }

        return $this->templating->renderClass(
            (string) $modelPath,
            $classMetadata->getClassName(),
            $constructorArguments,
            $code,
            $initCode
        );
    }

    /**
     * @param \Liip\MetadataParser\Metadata\ClassMetadata $classMetadata
     * @param \Liip\Serializer\Path\ArrayPath             $arrayPath
     * @param \Liip\Serializer\Path\ModelPath             $modelPath
     * @param string                                      $initCode
     * @param array<mixed>                                $stack
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\SyntaxError
     */
    private function generateCustomerInterface(
        ClassMetadata $classMetadata,
        ArrayPath $arrayPath,
        ModelPath $modelPath,
        string $initCode,
        array $stack = []
    ): string {
        $customerMetadata = $this->metadataBuilder->build(Customer::class, [
            new TakeBestReducer(),
        ]);
        $corporateMetadata = $this->metadataBuilder->build(CustomerCorporate::class, [
            new TakeBestReducer(),
        ]);

        $customerCode = $this->generateCodeForClass($customerMetadata, $arrayPath, $modelPath, $stack);
        $corporateCode = $this->generateCodeForClass($corporateMetadata, $arrayPath, $modelPath, $stack);

        return $this->customTemplating->renderCustomerInterface(
            (string) $arrayPath,
            (string) $modelPath,
            $classMetadata->getClassName(),
            [],
            $customerCode,
            $corporateCode,
            $initCode
        );
    }

    /**
     * @param \Liip\MetadataParser\Metadata\PropertyMetadata $propertyMetadata
     * @param \Liip\Serializer\Path\ArrayPath                $arrayPath
     * @param \Liip\Serializer\Path\ModelPath                $modelPath
     * @param mixed[]                                        $stack
     *
     * @return string
     * @throws \Exception
     */
    private function generateCodeForProperty(
        PropertyMetadata $propertyMetadata,
        ArrayPath $arrayPath,
        ModelPath $modelPath,
        array $stack
    ): string {
        if ($propertyMetadata->isReadOnly()) {
            return '';
        }

        if ($propertyMetadata->getAccessor()->hasSetterMethod()) {
            $tempVariable = ModelPath::tempVariable([(string) $modelPath, $propertyMetadata->getName()]);
            $code = $this->generateCodeForField($propertyMetadata, $arrayPath, $tempVariable, $stack);
            $code .= $this->templating->renderConditional(
                (string) $tempVariable,
                $this->templating->renderSetter(
                    (string) $modelPath,
                    (string) $propertyMetadata->getAccessor()->getSetterMethod(),
                    (string) $tempVariable
                )
            );
            $code .= $this->templating->renderUnset([(string) $tempVariable]);

            return $code;
        }

        $modelPropertyPath = $modelPath->withPath($propertyMetadata->getName());

        return $this->generateCodeForField($propertyMetadata, $arrayPath, $modelPropertyPath, $stack);
    }

    /**
     * @param \Liip\MetadataParser\Metadata\PropertyMetadata $propertyMetadata
     * @param \Liip\Serializer\Path\ArrayPath                $arrayPath
     * @param \Liip\Serializer\Path\ModelPath                $modelPath
     * @param mixed[]                                        $stack
     *
     * @return string
     * @throws \Exception
     */
    private function generateCodeForField(
        PropertyMetadata $propertyMetadata,
        ArrayPath $arrayPath,
        ModelPath $modelPath,
        array $stack
    ): string {
        return $this->templating->renderConditional(
            (string) $arrayPath,
            $this->generateInnerCodeForFieldType($propertyMetadata, $arrayPath, $modelPath, $stack)
        );
    }

    /**
     * @param \Liip\MetadataParser\Metadata\PropertyMetadata $propertyMetadata
     * @param \Liip\Serializer\Path\ArrayPath                $arrayPath
     * @param \Liip\Serializer\Path\ModelPath                $modelPropertyPath
     * @param mixed[]                                        $stack
     *
     * @return string
     * @throws \Exception
     */
    private function generateInnerCodeForFieldType(
        PropertyMetadata $propertyMetadata,
        ArrayPath $arrayPath,
        ModelPath $modelPropertyPath,
        array $stack
    ): string {
        $type = $propertyMetadata->getType();

        if ($type instanceof PropertyTypeArray) {
            if ($type->getSubType() instanceof PropertyTypePrimitive) {
                // for arrays of scalars, copy the field even when its an empty array
                return $this->templating->renderAssignJsonDataToField((string) $modelPropertyPath, (string) $arrayPath);
            }

            // either array or hashmap with second param the type of values
            // the index works the same whether its numeric or hashmap
            return $this->generateCodeForArray($type, $arrayPath, $modelPropertyPath, $stack);
        }

        switch ($type) {
            case $type instanceof PropertyTypeDateTime:
                if (null !== $type->getZone()) {
                    throw new RuntimeException('Timezone support is not implemented');
                }

                $format = $type->getDeserializeFormat() ?: $type->getFormat();

                if (null !== $format) {
                    return $this->templating->renderAssignDateTimeFromFormat(
                        $type->isImmutable(),
                        (string) $modelPropertyPath,
                        (string) $arrayPath,
                        $format
                    );
                }

                return $this->templating->renderAssignDateTimeToField(
                    $type->isImmutable(),
                    (string) $modelPropertyPath,
                    (string) $arrayPath
                );
            case $type instanceof PropertyTypePrimitive && 'float' === $type->getTypeName():
                return $this->templating->renderAssignJsonDataToFieldWithCasting(
                    (string) $modelPropertyPath,
                    (string) $arrayPath,
                    'float'
                );
            case $type instanceof PropertyTypePrimitive:
            case $type instanceof PropertyTypeUnknown:
            case $type instanceof PropertyTypeMixed:
                return $this->templating->renderAssignJsonDataToField((string) $modelPropertyPath, (string) $arrayPath);
            case $type instanceof PropertyTypeClass:
                return $this->generateCodeForClass($type->getClassMetadata(), $arrayPath, $modelPropertyPath, $stack);
            default:
                throw new RuntimeException('Unexpected type ' . get_class($type) . ' at ' . $modelPropertyPath);
        }
    }

    /**
     * @param \Liip\MetadataParser\Metadata\PropertyTypeArray $type
     * @param \Liip\Serializer\Path\ArrayPath                 $arrayPath
     * @param \Liip\Serializer\Path\ModelPath                 $modelPath
     * @param mixed[]                                         $stack
     *
     * @return string
     * @throws \Exception
     */
    private function generateCodeForArray(
        PropertyTypeArray $type,
        ArrayPath $arrayPath,
        ModelPath $modelPath,
        array $stack
    ): string {
        $index = ModelPath::indexVariable((string) $arrayPath);
        $arrayPropertyPath = $arrayPath->withVariable((string) $index);
        $modelPropertyPath = $modelPath->withArray((string) $index);
        $subType = $type->getSubType();

        switch ($subType) {
            case $subType instanceof PropertyTypeArray:
                $innerCode = $this->generateCodeForArray($subType, $arrayPropertyPath, $modelPropertyPath, $stack);
                break;
            case $subType instanceof PropertyTypeClass:
                $innerCode = $this->generateCodeForClass(
                    $subType->getClassMetadata(),
                    $arrayPropertyPath,
                    $modelPropertyPath,
                    $stack
                );
                break;
            case $subType instanceof PropertyTypeUnknown:
                $innerCode = $this->templating->renderAssignJsonDataToField(
                    $modelPropertyPath,
                    $arrayPropertyPath
                );
                break;
            default:
                throw new RuntimeException('Unexpected array subtype ' . get_class($subType));
        }

        if ('' === $innerCode) {
            return '';
        }

        $code = $this->templating->renderInitArray((string) $modelPath);
        $code .= $this->templating->renderLoop((string) $arrayPath, (string) $index, $innerCode);

        return $code;
    }
}
