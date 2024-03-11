<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Parser\JMSCore\Type;

use RetailCrm\Api\Component\Serializer\Parser\JMSCore\Type\Exception\SyntaxError;

/**
 * @internal
 */
final class Parser implements ParserInterface
{
    /**
     * @var Lexer
     */
    private Lexer $lexer;

    private ?Token $token = null;

    private string $input;

    /**
     * @var bool
     */
    private bool $root = true;

    public function parse(string $type): array
    {
        $this->input = $type;

        $this->lexer = new Lexer();
        $this->lexer->setInput($type);
        $this->lexer->moveNext();

        return $this->visit();
    }

    /**
     * @return mixed
     */
    private function visit(bool $fetchingParam = false)
    {
        $this->lexer->moveNext();

        if (!$this->lexer->token) {
            throw new SyntaxError(
                'Syntax error, unexpected end of stream',
            );
        }

        if (is_array($this->lexer->token)) {
            $this->token = Token::fromArray($this->lexer->token);
        } else {
            $this->token = Token::fromObject($this->lexer->token);
        }

        if ("" === $this->token->value && $fetchingParam) {
            $len = 0;
            $this->lexer->moveNext();

            while (true) {
                if (is_array($this->lexer->token)) {
                    $this->token = Token::fromArray($this->lexer->token);
                } else {
                    $this->token = Token::fromObject($this->lexer->token);
                }

                if ("" === $this->token->value) {
                    $len++;
                    break;
                }

                $len += strlen($this->token->value);
                $this->lexer->moveNext();
            }

            return substr($this->input, 9, $len + substr_count($this->input, ' '));
        }

        if (Lexer::T_FLOAT === $this->token->type) {
            return floatval($this->token->value);
        } elseif (Lexer::T_INTEGER === $this->token->type) {
            return intval($this->token->value);
        } elseif (Lexer::T_NULL === $this->token->type) {
            return null;
        } elseif (Lexer::T_STRING === $this->token->type) {
            return $this->token->value;
        } elseif (Lexer::T_IDENTIFIER === $this->token->type) {
            if ($this->lexer->isNextToken(Lexer::T_TYPE_START)) {
                return $this->visitCompoundType();
            } elseif ($this->lexer->isNextToken(Lexer::T_ARRAY_START)) {
                return $this->visitArrayType();
            }

            return $this->visitSimpleType();
        } elseif (!$this->root && Lexer::T_ARRAY_START === $this->token->type) {
            return $this->visitArrayType();
        }

        throw new SyntaxError(sprintf(
            'Syntax error, unexpected "%s" (%s)',
            $this->token->value,
            $this->getConstant($this->token->type),
        ));
    }

    /**
     * @return string|mixed[]
     */
    private function visitSimpleType()
    {
        $value = $this->token->value;

        return ['name' => $value, 'params' => []];
    }

    private function visitCompoundType(): array
    {
        $this->root = false;
        $name = $this->token->value;
        $this->match(Lexer::T_TYPE_START);

        $params = [];
        if (!$this->lexer->isNextToken(Lexer::T_TYPE_END)) {
            while (true) {
                $params[] = $this->visit(true);

                if ($this->lexer->isNextToken(Lexer::T_TYPE_END)) {
                    break;
                }

                $this->match(Lexer::T_COMMA);
            }
        }

        $this->match(Lexer::T_TYPE_END);

        return [
            'name' => $name,
            'params' => $params,
        ];
    }

    private function visitArrayType(): array
    {
        /*
         * Here we should call $this->match(Lexer::T_ARRAY_START); to make it clean
         * but the token has already been consumed by moveNext() in visit()
         */

        $params = [];
        if (!$this->lexer->isNextToken(Lexer::T_ARRAY_END)) {
            while (true) {
                $params[] = $this->visit();
                if ($this->lexer->isNextToken(Lexer::T_ARRAY_END)) {
                    break;
                }

                $this->match(Lexer::T_COMMA);
            }
        }

        $this->match(Lexer::T_ARRAY_END);

        return $params;
    }

    private function match(int $token): void
    {
        if (!$this->lexer->lookahead) {
            throw new SyntaxError(
                sprintf('Syntax error, unexpected end of stream, expected %s', $this->getConstant($token)),
            );
        }

        if (is_array($this->lexer->lookahead)) {
            $lookahead = Token::fromArray($this->lexer->lookahead);
        } else {
            $lookahead = Token::fromObject($this->lexer->lookahead);
        }

        if ($lookahead->type === $token) {
            $this->lexer->moveNext();

            return;
        }

        throw new SyntaxError(sprintf(
            'Syntax error, unexpected "%s" (%s), expected was %s',
            $lookahead->value,
            $this->getConstant($lookahead->type),
            $this->getConstant($token),
        ));
    }

    private function getConstant(int $value): string
    {
        $oClass = new \ReflectionClass(Lexer::class);

        return array_search($value, $oClass->getConstants());
    }
}
