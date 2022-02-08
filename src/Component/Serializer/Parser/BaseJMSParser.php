<?php

/**
 * PHP version 7.3
 *
 * @category BaseJMSParser
 * @package  RetailCrm\Api\Component\Serializer\Parser
 */

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Parser;

use ReflectionClass;
use RetailCrm\Api\Component\Serializer\Exception\SyntaxError;

/**
 * Class Parser
 *
 * @package RetailCrm\Api\Component\Serializer\Parser
 * @author  Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
final class BaseJMSParser
{
    /**
     * @var \RetailCrm\Api\Component\Serializer\Parser\JMSLexer
     */
    private $lexer;

    /**
     * @var bool
     */
    private $root = true;

    /**
     * @param string $string
     *
     * @return array|mixed[]
     */
    public function parse(string $string): array
    {
        $this->lexer = new JMSLexer();
        $this->lexer->setInput($string);
        $this->lexer->moveNext();

        return $this->visit();
    }

    /**
     * @return mixed
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    private function visit()
    {
        $this->lexer->moveNext();

        if (!$this->lexer->token) {
            throw new SyntaxError(
                'Syntax error, unexpected end of stream'
            );
        }

        if (JMSLexer::T_FLOAT === $this->lexer->token['type']) {
            return (float)$this->lexer->token['value'];
        } elseif (JMSLexer::T_INTEGER === $this->lexer->token['type']) {
            return (int)$this->lexer->token['value'];
        } elseif (JMSLexer::T_NULL === $this->lexer->token['type']) {
            return null;
        } elseif (JMSLexer::T_STRING === $this->lexer->token['type']) {
            return $this->lexer->token['value'];
        } elseif (JMSLexer::T_IDENTIFIER === $this->lexer->token['type']) {
            if ($this->lexer->isNextToken(JMSLexer::T_TYPE_START)) {
                return $this->visitCompoundType();
            } elseif ($this->lexer->isNextToken(JMSLexer::T_ARRAY_START)) {
                return $this->visitArrayType();
            }

            return $this->visitSimpleType();
        } elseif (!$this->root && JMSLexer::T_ARRAY_START === $this->lexer->token['type']) {
            return $this->visitArrayType();
        }

        throw new SyntaxError(sprintf(
            'Syntax error, unexpected "%s" (%s)',
            $this->lexer->token['value'],
            // @phpstan-ignore-next-line
            $this->getConstant($this->lexer->token['type'])
        ));
    }

    /**
     * @return mixed[]
     */
    private function visitSimpleType(): array
    {
        $value = $this->lexer->token['value']; // @phpstan-ignore-line

        return ['name' => $value, 'params' => []];
    }

    /**
     * @return array<string, mixed>
     */
    private function visitCompoundType(): array
    {
        $this->root = false;
        $name = $this->lexer->token['value']; // @phpstan-ignore-line
        $this->match(JMSLexer::T_TYPE_START);

        $params = [];
        if (!$this->lexer->isNextToken(JMSLexer::T_TYPE_END)) {
            while (true) {
                $params[] = $this->visit();

                if ($this->lexer->isNextToken(JMSLexer::T_TYPE_END)) {
                    break;
                }

                $this->match(JMSLexer::T_COMMA);
            }
        }

        $this->match(JMSLexer::T_TYPE_END);

        return [
            'name' => $name,
            'params' => $params,
        ];
    }

    /**
     * @return array<int, mixed>
     */
    private function visitArrayType(): array
    {
        /*
         * Here we should call $this->match(JMSLexer::T_ARRAY_START); to make it clean
         * but the token has already been consumed by moveNext() in visit()
         */
        $params = [];

        if (!$this->lexer->isNextToken(JMSLexer::T_ARRAY_END)) {
            while (true) {
                $params[] = $this->visit();

                if ($this->lexer->isNextToken(JMSLexer::T_ARRAY_END)) {
                    break;
                }

                $this->match(JMSLexer::T_COMMA);
            }
        }

        $this->match(JMSLexer::T_ARRAY_END);

        return $params;
    }

    /**
     * @param int $token
     */
    private function match(int $token): void
    {
        if (!$this->lexer->lookahead) {
            throw new SyntaxError(
                sprintf('Syntax error, unexpected end of stream, expected %s', $this->getConstant($token))
            );
        }

        if ($this->lexer->lookahead['type'] === $token) {
            $this->lexer->moveNext();

            return;
        }

        throw new SyntaxError(sprintf(
            'Syntax error, unexpected "%s" (%s), expected was %s',
            $this->lexer->lookahead['value'],
            $this->getConstant($this->lexer->lookahead['type']), // @phpstan-ignore-line
            $this->getConstant($token)
        ));
    }

    /**
     * @param int $value
     *
     * @return string
     */
    private function getConstant(int $value): string
    {
        $oClass = new ReflectionClass(JMSLexer::class);

        return (string) array_search($value, $oClass->getConstants());
    }
}
