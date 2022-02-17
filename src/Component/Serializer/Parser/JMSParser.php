<?php

/**
 * PHP version 7.3
 *
 * @category JMSParser
 * @package  RetailCrm\Api\Component\Serializer\Parser
 */

namespace RetailCrm\Api\Component\Serializer\Parser;

use Doctrine\Common\Annotations\AnnotationException;
use Doctrine\Common\Annotations\Reader;
use RetailCrm\Api\Component\Serializer\Annotation\Accessor;
use RetailCrm\Api\Component\Serializer\Annotation\AccessorOrder;
use RetailCrm\Api\Component\Serializer\Annotation\Exclude;
use RetailCrm\Api\Component\Serializer\Annotation\ExclusionPolicy;
use RetailCrm\Api\Component\Serializer\Annotation\Groups;
use RetailCrm\Api\Component\Serializer\Annotation\PostDeserialize;
use RetailCrm\Api\Component\Serializer\Annotation\SerializedName;
use RetailCrm\Api\Component\Serializer\Annotation\Since;
use RetailCrm\Api\Component\Serializer\Annotation\Type;
use RetailCrm\Api\Component\Serializer\Annotation\Until;
use RetailCrm\Api\Component\Serializer\Annotation\VirtualProperty;
use Liip\MetadataParser\Exception\InvalidTypeException;
use Liip\MetadataParser\Exception\ParseException;
use Liip\MetadataParser\Metadata\PropertyAccessor;
use Liip\MetadataParser\Metadata\PropertyType;
use Liip\MetadataParser\Metadata\PropertyTypeUnknown;
use Liip\MetadataParser\ModelParser\ModelParserInterface;
use Liip\MetadataParser\ModelParser\RawMetadata\PropertyCollection;
use Liip\MetadataParser\ModelParser\RawMetadata\PropertyVariationMetadata;
use Liip\MetadataParser\ModelParser\RawMetadata\RawClassMetadata;
use Liip\MetadataParser\TypeParser\PhpTypeParser;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use ReflectionProperty;
use UnexpectedValueException;

/**
 * Class JMSParser
 *
 * @category JMSParser
 * @package  RetailCrm\Api\Component\Serializer\Parser
 * @license  https://github.com/liip/metadata-parser/blob/master/LICENSE MIT License
 * @author   Liip <https://github.com/liip>
 * @author   Pavel Kovalenko
 * @see      https://github.com/liip/metadata-parser
 * @internal
 *
 * @SuppressWarnings(PHPMD)
 */
class JMSParser implements ModelParserInterface
{
    private const ACCESS_ORDER_CUSTOM = 'custom';

    /**
     * @var Reader
     */
    private $annotationsReader;

    /**
     * @var PhpTypeParser
     */
    private $phpTypeParser;

    /**
     * @var JMSTypeParser
     */
    private $jmsTypeParser;

    /**
     * JMSParser constructor.
     *
     * @param \Doctrine\Common\Annotations\Reader $annotationsReader
     */
    public function __construct(Reader $annotationsReader)
    {
        $this->annotationsReader = $annotationsReader;
        $this->phpTypeParser = new PhpTypeParser();
        $this->jmsTypeParser = new JMSTypeParser();
    }

    /**
     * @param \Liip\MetadataParser\ModelParser\RawMetadata\RawClassMetadata $classMetadata
     */
    public function parse(RawClassMetadata $classMetadata): void
    {
        try {
            $refClass = new ReflectionClass($classMetadata->getClassName());    // @phpstan-ignore-line
        } catch (ReflectionException $exception) {
            throw ParseException::classNotFound($classMetadata->getClassName(), $exception);
        }

        $this->parseProperties($refClass, $classMetadata);
        $this->parseMethods($refClass, $classMetadata);
        $this->parseClass($refClass, $classMetadata);
    }

    /**
     * @param \ReflectionClass                                              $refClass
     * @param \Liip\MetadataParser\ModelParser\RawMetadata\RawClassMetadata $classMetadata
     *
     * @phpstan-ignore-next-line
     */
    private function parseProperties(ReflectionClass $refClass, RawClassMetadata $classMetadata): void
    {
        if ($refParentClass = $refClass->getParentClass()) {
            $this->parseProperties($refParentClass, $classMetadata);
        }

        foreach ($refClass->getProperties() as $refProperty) {
            try {
                $annotations = $this->annotationsReader->getPropertyAnnotations($refProperty);
            } catch (AnnotationException $exception) {
                throw ParseException::propertyError((string) $classMetadata, $refProperty->getName(), $exception);
            }

            $property = $this->getProperty($classMetadata, $refProperty, $annotations);
            $this->parsePropertyAnnotations($classMetadata, $property, $annotations);
        }
    }

    /**
     * @param \ReflectionClass                                              $refClass
     * @param \Liip\MetadataParser\ModelParser\RawMetadata\RawClassMetadata $classMetadata
     *
     * @phpstan-ignore-next-line
     */
    private function parseMethods(ReflectionClass $refClass, RawClassMetadata $classMetadata): void
    {
        if ($refParentClass = $refClass->getParentClass()) {
            $this->parseMethods($refParentClass, $classMetadata);
        }

        foreach ($refClass->getMethods() as $refMethod) {
            if (false === $refMethod->getDocComment()) {
                continue;
            }

            try {
                $annotations = $this->annotationsReader->getMethodAnnotations($refMethod);
            } catch (AnnotationException $exception) {
                throw ParseException::propertyError((string) $classMetadata, $refMethod->getName(), $exception);
            }

            if ($this->isVirtualProperty($annotations)) {
                if (!$refMethod->isPublic()) {
                    throw ParseException::nonPublicMethod((string) $classMetadata, $refMethod->getName());
                }

                $methodName = $this->getMethodName($annotations, $refMethod);
                $name = $this->getSerializedName($annotations) ?: $methodName;

                $property = new PropertyVariationMetadata($methodName, true, true);
                $classMetadata->addPropertyVariation($name, $property);

                $property->setType($this->getReturnType($property, $refMethod, $refClass));
                $property->setAccessor(new PropertyAccessor($refMethod->getName(), null));

                $this->parsePropertyAnnotations($classMetadata, $property, $annotations);
            }

            if ($this->isPostDeserializeMethod($annotations)) {
                if (!$refMethod->isPublic()) {
                    throw ParseException::nonPublicMethod((string) $classMetadata, $refMethod->getName());
                }

                $classMetadata->addPostDeserializeMethod($refMethod->getName());
            }
        }
    }

    /**
     * @param \ReflectionClass                                              $refClass
     * @param \Liip\MetadataParser\ModelParser\RawMetadata\RawClassMetadata $classMetadata
     *
     * @phpstan-ignore-next-line
     */
    private function parseClass(ReflectionClass $refClass, RawClassMetadata $classMetadata): void
    {
        try {
            $annotations = $this->gatherClassAnnotations($refClass);
        } catch (AnnotationException $e) {
            throw ParseException::classError($refClass->getName(), $e);
        }

        foreach ($annotations as $annotation) {
            switch (true) {
                case $annotation instanceof AccessorOrder:
                    if (self::ACCESS_ORDER_CUSTOM !== $annotation->order) {
                        throw ParseException::unsupportedClassAnnotation(
                            (string) $classMetadata,
                            'AccessorOrder::' . $annotation->order
                        );
                    }

                    // usort is not stable for the same result. we want to preserve order of
                    // the fields that are not explicitly mentioned
                    $order = [];
                    $init = count($annotation->custom);
                    foreach ($classMetadata->getPropertyCollections() as $property) {
                        $position = $property->getPosition($annotation->custom);
                        if (null === $position) {
                            $position = $init++;
                        }
                        $order[$property->getSerializedName()] = $position;
                    }

                    $classMetadata->sortProperties(static function (
                        PropertyCollection $propA,
                        PropertyCollection $propB
                    ) use ($order): int {
                        return $order[$propA->getSerializedName()] <=> $order[$propB->getSerializedName()];
                    });
                    break;
                case $annotation instanceof ExclusionPolicy:
                    if (ExclusionPolicy::NONE !== $annotation->policy) {
                        throw ParseException::unsupportedClassAnnotation(
                            (string) $classMetadata,
                            'ExclusionPolicy::' . $annotation->policy
                        );
                    }
                    break;
                default:
                    if (
                        0 === strncmp(
                            'RetailCrm\Api\Component\Serializer\Annotation\\',
                            get_class($annotation),
                            mb_strlen('RetailCrm\Api\Component\Serializer\Annotation\\')
                        )
                    ) {
                        // if there are annotations we can safely ignore, we need to explicitly ignore them
                        throw ParseException::unsupportedClassAnnotation(
                            (string) $classMetadata,
                            get_class($annotation)
                        );
                    }
            }
        }
    }

    /**
     * Find the annotations we care about by looking through all ancestors of $reflectionClass.
     *
     * @param \ReflectionClass $reflectionClass
     *
     * @return object[] Hashmap of annotation class => annotation object
     * @throws \Doctrine\Common\Annotations\AnnotationException
     *
     * @phpstan-ignore-next-line
     */
    private function gatherClassAnnotations(ReflectionClass $reflectionClass): array
    {
        $map = [];

        if ($parent = $reflectionClass->getParentClass()) {
            $map = $this->gatherClassAnnotations($parent);
        }

        $annotations = $this->annotationsReader->getClassAnnotations($reflectionClass);

        foreach ($annotations as $annotation) {
            $map[get_class($annotation)] = $annotation;
        }

        return $map;
    }

    /**
     * @param \Liip\MetadataParser\ModelParser\RawMetadata\RawClassMetadata          $classMetadata
     * @param \Liip\MetadataParser\ModelParser\RawMetadata\PropertyVariationMetadata $property
     * @param array<mixed>                                                           $annotations
     */
    private function parsePropertyAnnotations(
        RawClassMetadata $classMetadata,
        PropertyVariationMetadata $property,
        array $annotations
    ): void {
        foreach ($annotations as $annotation) {
            switch (true) {
                case $annotation instanceof Type:
                    try {
                        $type = $this->jmsTypeParser->parse($annotation->name);
                    } catch (InvalidTypeException $exception) {
                        throw ParseException::propertyTypeError(
                            (string) $classMetadata,
                            (string) $property,
                            $exception
                        );
                    }

                    if ($property->getType() instanceof PropertyTypeUnknown) {
                        $property->setType($type);
                    } else {
                        try {
                            $property->setType($property->getType()->merge($type));
                        } catch (UnexpectedValueException $exception) {
                            throw ParseException::propertyTypeConflict(
                                (string) $classMetadata,
                                (string) $property,
                                (string) $property->getType(),
                                (string) $type,
                                $exception
                            );
                        }
                    }
                    break;
                case $annotation instanceof Exclude:
                    if (null !== $annotation->if) {
                        throw ParseException::unsupportedPropertyAnnotation(
                            (string) $classMetadata,
                            (string) $property,
                            'Exclude::if'
                        );
                    }
                    $classMetadata->removePropertyVariation((string) $property);
                    break;
                case $annotation instanceof Groups:
                    $property->setGroups($annotation->groups);
                    break;
                case $annotation instanceof Accessor:
                    $property->setAccessor(new PropertyAccessor($annotation->getter, $annotation->setter));
                    break;
                case $annotation instanceof Since:
                    $property->setVersionRange($property->getVersionRange()->withSince($annotation->version));
                    break;
                case $annotation instanceof Until:
                    $property->setVersionRange($property->getVersionRange()->withUntil($annotation->version));
                    break;
                case $annotation instanceof SerializedName:
                    // we handle this separately
                case $annotation instanceof VirtualProperty:
                    // we handle this separately
                    break;
                default:
                    if (0 === strncmp('JMS\Serializer\\', get_class($annotation), mb_strlen('JMS\Serializer\\'))) {
                        // if there are annotations we can safely ignore, we need to explicitly ignore them
                        throw ParseException::unsupportedPropertyAnnotation(
                            (string) $classMetadata,
                            (string) $property,
                            get_class($annotation)
                        );
                    }
                    break;
            }
        }
    }

    /**
     * Returns the property metadata for the specified property.
     *
     * If the property already exists on the class metadata this is returned.
     * If the property has a serialized name that overrides the name of an existing property,
     * it will be renamed and merged.
     *
     * @param \Liip\MetadataParser\ModelParser\RawMetadata\RawClassMetadata $classMetadata
     * @param \ReflectionProperty                                           $refProperty
     * @param array<mixed>                                                  $annotations
     *
     * @return \Liip\MetadataParser\ModelParser\RawMetadata\PropertyVariationMetadata
     * @throws \ReflectionException
     */
    private function getProperty(
        RawClassMetadata $classMetadata,
        ReflectionProperty $refProperty,
        array $annotations
    ): PropertyVariationMetadata {
        $defaultName = PropertyCollection::serializedName($refProperty->getName());
        $name = $this->getSerializedName($annotations) ?: $defaultName;

        if ($classMetadata->hasPropertyVariation($refProperty->getName())) {
            $property = $classMetadata->getPropertyVariation($refProperty->getName());

            if ($defaultName !== $name && $classMetadata->hasPropertyCollection($defaultName)) {
                $classMetadata->removePropertyVariation($defaultName);
                $this->addPropertyVariation($defaultName, $name, $property, $classMetadata);
            }
        } else {
            $property = PropertyVariationMetadata::fromReflection($refProperty);
            $this->addPropertyVariation($defaultName, $name, $property, $classMetadata);
        }

        return $property;
    }

    /**
     * This workaround helps to avoid unnecessary camelCase to snake_case conversion while
     * using default property metadata classes. This allows us to produce code we expect
     * without rewriting the whole metadata parsing library.
     *
     * @param string                                                                 $defaultName
     * @param string                                                                 $name
     * @param \Liip\MetadataParser\ModelParser\RawMetadata\PropertyVariationMetadata $property
     * @param \Liip\MetadataParser\ModelParser\RawMetadata\RawClassMetadata          $classMetadata
     *
     * @throws \ReflectionException
     */
    private function addPropertyVariation(
        string $defaultName,
        string $name,
        PropertyVariationMetadata $property,
        RawClassMetadata $classMetadata
    ): void {
        if ($classMetadata->hasPropertyCollection($defaultName)) {
            $prop = $classMetadata->getPropertyCollection($defaultName);
        } else {
            $prop = new PropertyCollection($name);
            $classMetadata->addPropertyCollection($prop);
        }

        $propName = new ReflectionProperty(get_class($prop), 'serializedName');
        $propName->setAccessible(true);
        $propName->setValue($prop, $name);

        $prop->addVariation($property);
    }

    /**
     * @param \Liip\MetadataParser\ModelParser\RawMetadata\PropertyVariationMetadata $property
     * @param \ReflectionMethod                                                      $refMethod
     * @param \ReflectionClass                                                       $refClass
     *
     * @return \Liip\MetadataParser\Metadata\PropertyType
     *
     * @phpstan-ignore-next-line
     */
    private function getReturnType(
        PropertyVariationMetadata $property,
        ReflectionMethod $refMethod,
        ReflectionClass $refClass
    ): PropertyType {
        $type = new PropertyTypeUnknown(true);
        $refType = $refMethod->getReturnType();

        if (null !== $refType) {
            $type = $this->phpTypeParser->parseReflectionType($refType);
        }

        try {
            $docBlockType = $this->getReturnTypeOfMethod($refMethod, $refClass);
        } catch (InvalidTypeException $exception) {
            throw ParseException::propertyTypeError($refClass->getName(), (string) $property, $exception);
        }

        if (null === $docBlockType) {
            return $type;
        }

        try {
            return $type->merge($docBlockType);
        } catch (UnexpectedValueException $exception) {
            throw ParseException::propertyTypeConflict(
                $refClass->getName(),
                (string) $property,
                (string) $type,
                (string) $docBlockType,
                $exception
            );
        }
    }

    /**
     * @param \ReflectionMethod $refMethod
     * @param \ReflectionClass  $refClass
     *
     * @return \Liip\MetadataParser\Metadata\PropertyType|null
     *
     * @phpstan-ignore-next-line
     */
    private function getReturnTypeOfMethod(ReflectionMethod $refMethod, ReflectionClass $refClass): ?PropertyType
    {
        $docComment = $refMethod->getDocComment();

        if (false === $docComment) {
            return null;
        }

        foreach (explode("\n", $docComment) as $line) {
            if (1 === preg_match('/@return ([^ ]+)/', $line, $matches)) {
                return $this->phpTypeParser->parseAnnotationType($matches[1], $refClass);
            }
        }

        return null;
    }

    /**
     * @param array<mixed> $annotations
     *
     * @return string|null
     */
    private function getSerializedName(array $annotations): ?string
    {
        foreach ($annotations as $annotation) {
            if ($annotation instanceof SerializedName) {
                return $annotation->name;
            }
        }

        return null;
    }

    /**
     * @param array<mixed> $annotations
     *
     * @return bool
     */
    private function isVirtualProperty(array $annotations): bool
    {
        foreach ($annotations as $annotation) {
            if ($annotation instanceof VirtualProperty) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param array<mixed> $annotations
     *
     * @return bool
     */
    private function isPostDeserializeMethod(array $annotations): bool
    {
        foreach ($annotations as $annotation) {
            if ($annotation instanceof PostDeserialize) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param array<mixed>      $annotations
     * @param \ReflectionMethod $refMethod
     *
     * @return string
     */
    private function getMethodName(array $annotations, ReflectionMethod $refMethod): string
    {
        $name = $refMethod->getName();

        foreach ($annotations as $annotation) {
            if ($annotation instanceof VirtualProperty && null !== $annotation->name) {
                $name = $annotation->name;
                break;
            }
        }

        if (0 === strpos($name, 'get')) {
            $name = lcfirst(substr($name, 3));
        }

        return $name;
    }
}
