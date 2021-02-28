<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Annotation;

/**
 * Controls the order of properties in a class.
 *
 * @Annotation
 * @Target("CLASS")
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
final class AccessorOrder
{
    /**
     * @Required
     * @var string
     */
    public $order;

    /**
     * @var array<string>
     */
    public $custom = [];
}
