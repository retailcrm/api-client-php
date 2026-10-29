<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBase
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentByRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsCreateRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsEditRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsHistoryRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseSectionsCreateRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseSectionsEditRequest;
use RetailCrm\Api\Model\Response\IdResponse;
use RetailCrm\Api\Model\Response\KnowledgeBase\KnowledgeBaseDocumentResponse;
use RetailCrm\Api\Model\Response\KnowledgeBase\KnowledgeBaseDocumentsHistoryResponse;
use RetailCrm\Api\Model\Response\KnowledgeBase\KnowledgeBaseDocumentsResponse;
use RetailCrm\Api\Model\Response\KnowledgeBase\KnowledgeBaseSectionsResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Company documents and sections. Requires knowledge_base_read or knowledge_base_write API scope.
 *
 * @category KnowledgeBase
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class KnowledgeBase extends AbstractApiResourceGroup
{
    /**
     * Makes GET "/api/v5/knowledge-base/sections" request.
     *
     * Example (initialize $client with SimpleClientFactory first):
     * ```php
     * $response = $client->knowledgeBase->sections();
     * ```
     *
     *
     * @return KnowledgeBaseSectionsResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function sections(): KnowledgeBaseSectionsResponse
    {
        /** @var KnowledgeBaseSectionsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'knowledge-base/sections',
            null,
            KnowledgeBaseSectionsResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/knowledge-base/sections/create" request.
     *
     * Example (initialize $client with SimpleClientFactory first):
     * ```php
     * $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseSectionsCreateRequest();
     * $request->section = new \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseSectionInput();
     * $request->section->name = 'Shipping';
     * $response = $client->knowledgeBase->sectionsCreate($request);
     * ```
     *
     * @param KnowledgeBaseSectionsCreateRequest $request
     *
     * @return IdResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function sectionsCreate(KnowledgeBaseSectionsCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'knowledge-base/sections/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/knowledge-base/sections/{id}/edit" request.
     *
     * Example (initialize $client with SimpleClientFactory first):
     * ```php
     * $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseSectionsEditRequest();
     * $request->section = new \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseSectionInput();
     * $request->section->name = 'Shipping';
     * $response = $client->knowledgeBase->sectionsEdit(123, $request);
     * ```
     *
     * @param int $id
     * @param KnowledgeBaseSectionsEditRequest $request
     *
     * @return IdResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function sectionsEdit(int $id, KnowledgeBaseSectionsEditRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            sprintf('knowledge-base/sections/%s/edit', rawurlencode((string) $id)),
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/knowledge-base/sections/{id}/delete" request.
     *
     * Deletes the section, all its subsections and their documents.
     *
     * Example (initialize $client with SimpleClientFactory first):
     * ```php
     * $response = $client->knowledgeBase->sectionsDelete(123);
     * ```
     *
     * @param int $id
     *
     * @return SuccessResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function sectionsDelete(int $id): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            sprintf('knowledge-base/sections/%s/delete', rawurlencode((string) $id)),
            null,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/knowledge-base/documents" request.
     *
     * Example (initialize $client with SimpleClientFactory first):
     * ```php
     * $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsRequest();
     * $response = $client->knowledgeBase->documents($request);
     * ```
     *
     * @param KnowledgeBaseDocumentsRequest|null $request
     *
     * @return KnowledgeBaseDocumentsResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function documents(?KnowledgeBaseDocumentsRequest $request = null): KnowledgeBaseDocumentsResponse
    {
        /** @var KnowledgeBaseDocumentsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'knowledge-base/documents',
            $request,
            KnowledgeBaseDocumentsResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/knowledge-base/documents/{id}" request.
     *
     * Defaults to externalId; pass by=id to use the internal document ID.
     *
     * Example (initialize $client with SimpleClientFactory first):
     * ```php
     * $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentByRequest();
     * $request->by = 'id';
     * $response = $client->knowledgeBase->documentsGet(123, $request);
     * ```
     *
     * @param int|string $id
     * @param KnowledgeBaseDocumentByRequest|null $request
     *
     * @return KnowledgeBaseDocumentResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function documentsGet($id, ?KnowledgeBaseDocumentByRequest $request = null): KnowledgeBaseDocumentResponse
    {
        /** @var KnowledgeBaseDocumentResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            sprintf('knowledge-base/documents/%s', rawurlencode((string) $id)),
            $request,
            KnowledgeBaseDocumentResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/knowledge-base/documents/create" request.
     *
     * Example (initialize $client with SimpleClientFactory first):
     * ```php
     * $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsCreateRequest();
     * $request->document = new \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentInput();
     * $request->document->title = 'Shipping';
     * $response = $client->knowledgeBase->documentsCreate($request);
     * ```
     *
     * @param KnowledgeBaseDocumentsCreateRequest $request
     *
     * @return IdResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function documentsCreate(KnowledgeBaseDocumentsCreateRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'knowledge-base/documents/create',
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/knowledge-base/documents/{id}/edit" request.
     *
     * Defaults to externalId; pass by=id to use the internal document ID.
     *
     * Example (initialize $client with SimpleClientFactory first):
     * ```php
     * $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsEditRequest();
     * $request->document = new \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentInput();
     * $request->document->title = 'Shipping';
     * $request->by = 'id';
     * $response = $client->knowledgeBase->documentsEdit(123, $request);
     * ```
     *
     * @param int|string $id
     * @param KnowledgeBaseDocumentsEditRequest $request
     *
     * @return IdResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function documentsEdit($id, KnowledgeBaseDocumentsEditRequest $request): IdResponse
    {
        /** @var IdResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            sprintf('knowledge-base/documents/%s/edit', rawurlencode((string) $id)),
            $request,
            IdResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/knowledge-base/documents/{id}/delete" request.
     *
     * Defaults to externalId; pass by=id to use the internal document ID.
     *
     * Example (initialize $client with SimpleClientFactory first):
     * ```php
     * $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentByRequest();
     * $request->by = 'id';
     * $response = $client->knowledgeBase->documentsDelete(123, $request);
     * ```
     *
     * @param int|string $id
     * @param KnowledgeBaseDocumentByRequest|null $request
     *
     * @return SuccessResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function documentsDelete($id, ?KnowledgeBaseDocumentByRequest $request = null): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            sprintf('knowledge-base/documents/%s/delete', rawurlencode((string) $id)),
            $request,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/knowledge-base/documents/history" request.
     *
     * Example (initialize $client with SimpleClientFactory first):
     * ```php
     * $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsHistoryRequest();
     * $response = $client->knowledgeBase->documentsHistory($request);
     * ```
     *
     * @param KnowledgeBaseDocumentsHistoryRequest|null $request
     *
     * @return KnowledgeBaseDocumentsHistoryResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function documentsHistory(
        ?KnowledgeBaseDocumentsHistoryRequest $request = null
    ): KnowledgeBaseDocumentsHistoryResponse {
        /** @var KnowledgeBaseDocumentsHistoryResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'knowledge-base/documents/history',
            $request,
            KnowledgeBaseDocumentsHistoryResponse::class
        );
        return $response;
    }
}
