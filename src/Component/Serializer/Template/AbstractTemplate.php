<?php

/**
 * PHP version 7.3
 *
 * @category AbstractTemplate
 * @package  RetailCrm\Api\Component\Serializer\Template
 */

namespace RetailCrm\Api\Component\Serializer\Template;

use Twig\Environment;
use Twig\Loader\ArrayLoader;

/**
 * Class AbstractTemplate
 *
 * @category AbstractTemplate
 * @package  RetailCrm\Api\Component\Serializer\Template
 * @internal
 */
abstract class AbstractTemplate
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * CustomDeserialization constructor.
     */
    public function __construct()
    {
        $this->twig = new Environment(new ArrayLoader(), ['autoescape' => false]);
    }

    /**
     * @param string               $template
     * @param array<string, mixed> $parameters
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\SyntaxError
     */
    protected function render(string $template, array $parameters): string
    {
        $tmpl = $this->twig->createTemplate($template);

        return $tmpl->render($parameters);
    }
}
