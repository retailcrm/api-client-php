<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
class Discriminator
{
    /** @var array<string> */
    public $map;

    /** @var string */
    public $field = 'type';

    /** @var bool */
    public $disabled = false;

    /** @var string[] */
    public $groups = [];
}
