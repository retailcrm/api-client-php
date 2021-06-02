<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Annotation;

/**
 * @Annotation
 * @Target("PROPERTY")
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
final class Accessor
{
    /**
     * @var string
     */
    public $getter;

    /**
     * @var string
     */
    public $setter;
}
