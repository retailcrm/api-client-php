<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Parser\JMSCore\Type;

use RetailCrm\Api\Component\Serializer\Parser\JMSCore\Type\Exception\SyntaxError;

/**
 * @internal
 */
final class Parser implements ParserInterface
{
    /** @var \RetailCrm\Api\Component\Serializer\Parser\JMSCore\Type\Lexer */
    private $lexer;

    /** @var \RetailCrm\Api\Component\Serializer\Parser\JMSCore\Type\Token|null */
    private $token = null;

    /** @var string */
    private $input;

    /** @var bool */
    private $root = true;

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

        /*
         * There is a difference in the behavior of the tokenizer depending on the version of the lexer. This affects
         * how the lexer interprets date formats for compound date types. In our case it has a huge impact because
         * we're using `DateTime<'Y-m-d H:i:s'>` in the API. Newer lexer versions will treat the whole format
         * (`Y-m-d H:i:s`) as a token of string type. Older lexer versions will treat each symbol of the format as
         * a single token, and this will inevitably break type parsing during model compilation (it will say something
         * about unexpected token).
         *
         * The condition below is used to work around this, albeit in a very hacky way. The token it tries to detect is
         * actually a single quote ('). After detecting this token and determining that this time parser has been
         * called recursively for a compound type, it will try to determine the parameter length and extract it as
         * a single token. In other words, we're trying to mimic newer lexer behavior while using an older version.
         *
         * This implementation is very limited, as it may fail abruptly with more complex compound types, also it
         * may fail to extract the type correctly if it has different whitespace symbols / multiple whitespace symbols.
         * It was tested only with the compound date type mentioned above.
         *
         * A special fallback parser would be a better solution, but it would take much more time and effort to create.
         */
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
