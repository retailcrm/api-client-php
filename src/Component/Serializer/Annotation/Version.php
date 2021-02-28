<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Annotation;

/**
 * Class Version
 *
 * @package RetailCrm\Api\Component\Serializer\Annotation
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
abstract class Version
{
    /**
     * @Required
     * @var string
     */
    public $version;
}
