<?php

/**
 * PHP version 7.3
 *
 * @category PaginatedRequestIterator
 */

use RetailCrm\Api\Client;
use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class PaginatedRequestIterator
 *
 * @category PaginatedRequestIterator
 * @template T
 * @implements Iterator<int|string, T>
 */
class PaginatedRequestIterator implements Iterator
{
    /** @var \RetailCrm\Api\Client */
    private $client;

    /** @var array<int|string, mixed> */
    private $items = [];

    /** @var int */
    private $position = 0;

    /** @var int */
    private $seek = 0;

    /** @var int */
    private $currentPage = 1;

    /** @var bool */
    private $fetchFailed = false;

    /** @var \Throwable|null */
    private $error;

    /** @var bool */
    private $finalized = false;

    /** @var \RetailCrm\Api\Interfaces\RequestInterface */
    private $request;

    /** @var callable */
    private $nextPageFunc;

    /** @var callable */
    private $sendResponseFunc;

    /** @var callable */
    private $extractBatchFunc;

    /**
     * PaginatedRequestIterator constructor.
     *
     * @param \RetailCrm\Api\Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * This request will be used in every iteration.
     *
     * @param \RetailCrm\Api\Interfaces\RequestInterface $request
     *
     * @return self
     */
    public function setRequest(RequestInterface $request): self
    {
        $this->request = $request;
        return $this;
    }

    /**
     * This function should modify provided request which will be used in the next iteration.
     *
     * These params will be supplied in this exact order:
     * - The request instance.
     * - The response instance.
     * - Next page number.
     *
     * @param callable $nextPageFunc
     *
     * @return self
     */
    public function setNextPageFunc(callable $nextPageFunc): self
    {
        $this->nextPageFunc = $nextPageFunc;
        return $this;
    }

    /**
     * This function should send the request and return the response.
     *
     * These params will be supplied in this exact order:
     * - The Client instance.
     * - The request instance.
     *
     * @param callable $sendResponseFunc
     *
     * @return self
     */
    public function setSendResponseFunc(callable $sendResponseFunc): self
    {
        $this->sendResponseFunc = $sendResponseFunc;
        return $this;
    }

    /**
     * This function should extract the batch of objects from the response.
     *
     * These params will be supplied in this exact order:
     * - The response instance.
     *
     * @param callable $extractBatchFunc
     *
     * @return PaginatedRequestIterator
     */
    public function setExtractBatchFunc(callable $extractBatchFunc): PaginatedRequestIterator
    {
        $this->extractBatchFunc = $extractBatchFunc;
        return $this;
    }

    /**
     * @inheritDoc
     * @return mixed
     */
    public function current()
    {
        return $this->items[$this->getPosition()];
    }

    /**
     * @inheritDoc
     */
    public function next(): void
    {
        ++$this->position;
    }

    /**
     * @inheritDoc
     */
    public function key(): int
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid(): bool
    {
        if (empty($this->items) || !array_key_exists($this->getPosition(), $this->items)) {
            $this->fetchChunk();
        }

        return isset($this->items[$this->getPosition()]);
    }

    /**
     * @inheritDoc
     */
    public function rewind(): void
    {
        $this->items = [];
        $this->position = 0;
        $this->seek = 0;
        $this->currentPage = 1;
        $this->error = null;
    }

    /**
     * @return bool
     */
    public function isFetchFailed(): bool
    {
        return $this->fetchFailed;
    }

    /**
     * @return \Throwable|null
     */
    public function getError(): ?Throwable
    {
        return $this->error;
    }

    /**
     * @return int
     */
    private function getPosition(): int
    {
        return $this->position - $this->seek;
    }

    /**
     * fetchChunk obtains chunk of data
     */
    private function fetchChunk(): void
    {
        if ($this->finalized || $this->fetchFailed) {
            return;
        }

        try {
            if ($this->currentPage > 1) {
                time_nanosleep(0, 100000000);
            }

            $response = call_user_func($this->sendResponseFunc, $this->client, $this->request);

            if ($response instanceof AbstractPaginatedResponse) {
                $batch = call_user_func($this->extractBatchFunc, $response);

                if (empty($batch)) {
                    $this->items = [];
                    $this->fetchFailed = true;
                    $this->error = new HandlerException('Received an empty response');
                } else {
                    $this->seek += count($this->items);
                    $this->items = array_values($batch);

                    if ($this->currentPage < $response->pagination->totalPageCount) {
                        call_user_func($this->nextPageFunc, $this->request, $response, ++$this->currentPage);
                    } else {
                        $this->finalized = true;
                    }
                }
            }
        } catch (Throwable $exception) {
            if ($exception instanceof ApiExceptionInterface && 503 === $exception->getStatusCode()) {
                time_nanosleep(1, 0);
                $this->fetchChunk();

                return;
            }

            $this->fetchFailed = true;
            $this->error = $exception;
        }
    }
}
