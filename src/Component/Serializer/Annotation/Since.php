<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
final class Since extends Version
{
}
