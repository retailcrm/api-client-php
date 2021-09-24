<?php

/**
 * PHP version 7.3
 *
 * @category PockBuilder
 * @package  RetailCrm\TestUtils
 */

namespace RetailCrm\TestUtils;

use Pock\PockBuilder as Base;

/**
 * Class PockBuilder
 *
 * @category PockBuilder
 * @package  RetailCrm\TestUtils
 */
class PockBuilder extends Base
{
    /**
     * Match JSON form field using provided JSON string or array.
     *
     * @param string                      $name
     * @param string|array<string, mixed> $value
     *
     * @return $this
     * @throws \Pock\Exception\JsonException
     */
    public function matchJsonFormField(string $name, $value): self
    {
        $this->addMatcher(new JsonFormFieldMatcher($name, $value));

        return $this;
    }
}
