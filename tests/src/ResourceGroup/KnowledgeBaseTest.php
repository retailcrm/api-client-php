<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseTest
 * @package  RetailCrm\Tests\ResourceGroup
 */

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentInput;
use RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseSectionInput;
use RetailCrm\Api\Model\Entity\Files\Attachment;
use RetailCrm\Api\Model\Entity\Files\AttachmentKnowledgeBaseDocument;
use RetailCrm\Api\Model\Entity\Files\File;
use RetailCrm\Api\Model\Request\Files\FilesEditRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentByRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsHistoryRequest;
use RetailCrm\Api\Model\Filter\KnowledgeBase\KnowledgeBaseDocumentFilter;
use RetailCrm\Api\Model\Filter\KnowledgeBase\KnowledgeBaseDocumentHistoryFilter;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

/**
 * Tests the knowledge base REST contract.
 *
 * @category KnowledgeBaseTest
 * @package  RetailCrm\Tests\ResourceGroup
 */
class KnowledgeBaseTest extends AbstractApiResourceGroupTestCase
{
    public function testSections(): void
    {
        $json = '{"success":true,"sections":[{"id":1,"parentId":2,"name":"Shipping",'
            . '"path":"Help / Shipping","documentsCount":3,"createdAt":"2026-10-26 10:00:00",'
            . '"updatedAt":"2026-10-26 11:00:00"}]}';
        $mock = self::createApiMockBuilder('knowledge-base/sections');
        $mock->matchMethod('GET')->reply(200)->withBody($json);
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertModelEqualsToResponse($json, $client->knowledgeBase->sections());
    }

    public function testDocuments(): void
    {
        $request = new KnowledgeBaseDocumentsRequest();
        $request->limit = 20;
        $request->page = 1;
        $request->filter = new KnowledgeBaseDocumentFilter();
        $request->filter->ids = [7, 8];
        $request->filter->externalIds = ['doc-7'];
        $request->filter->sectionId = 1;
        $request->filter->directOnly = true;
        $request->filter->hasFile = false;
        $request->filter->availableForCopilot = false;
        $request->filter->search = 'Shipping';
        $json = '{"success":true,"pagination":{"limit":20,"currentPage":1,"totalCount":1,"totalPageCount":1},'
            . '"documents":[{"id":7,"sectionId":1,"title":"Shipping","content":"# Shipping",'
            . '"externalId":"doc-7","availableForCopilot":false,"contentHash":"abc",'
            . '"createdAt":"2026-10-26 10:00:00","updatedAt":"2026-10-26 11:00:00"}]}';
        $mock = self::createApiMockBuilder('knowledge-base/documents');
        $mock->matchMethod('GET')->matchQuery([
            'limit' => '20', 'page' => '1',
            'filter' => ['ids' => ['7', '8'], 'externalIds' => ['doc-7'], 'sectionId' => '1',
                'directOnly' => '1', 'availableForCopilot' => '0', 'hasFile' => '0', 'search' => 'Shipping'],
        ])->reply(200)->withBody($json);
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertModelEqualsToResponse($json, $client->knowledgeBase->documents($request));
    }

    public function testGetDocumentById(): void
    {
        $request = new KnowledgeBaseDocumentByRequest();
        $request->by = 'id';
        $json = '{"success":true,"document":{"id":7,"title":"Shipping","availableForCopilot":false,'
            . '"file":{"id":9,"name":"manual.txt","type":"text/plain","size":12,"url":"https://example.com/file"}}}';
        $mock = self::createApiMockBuilder('knowledge-base/documents/7');
        $mock->matchMethod('GET')->matchQuery(['by' => 'id'])->reply(200)->withBody($json);
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertModelEqualsToResponse($json, $client->knowledgeBase->documentsGet(7, $request));
    }

    public function testGetDocumentByExternalId(): void
    {
        $mock = self::createApiMockBuilder('knowledge-base/documents/doc-7');
        $mock->matchMethod('GET')->reply(200)->withBody('{"success":true,"document":{"id":7}}');
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertSame(7, $client->knowledgeBase->documentsGet('doc-7')->document->id);
    }

    public function testHistory(): void
    {
        $request = new KnowledgeBaseDocumentsHistoryRequest();
        $request->limit = 20;
        $request->filter = new KnowledgeBaseDocumentHistoryFilter();
        $request->filter->sinceId = 12;
        $request->filter->documentId = 7;
        $request->filter->startDate = new \DateTime('2026-10-26 10:00:00');
        $request->filter->endDate = new \DateTime('2026-10-26 11:00:00');
        $json = '{"success":true,"generatedAt":"2026-10-26 12:00:00",'
            . '"pagination":{"limit":20,"currentPage":1,"totalCount":1,"totalPageCount":1},'
            . '"history":[{"id":13,"createdAt":"2026-10-26 10:30:00","source":"api",'
            . '"apiKey":{"current":true},"field":"section","oldValue":1,"newValue":{"id":2},'
            . '"document":{"id":7,"externalId":"doc-7"}}]}';
        $mock = self::createApiMockBuilder('knowledge-base/documents/history');
        $mock->matchMethod('GET')->matchQuery(['limit' => '20', 'filter' => [
            'documentId' => '7', 'sinceId' => '12',
            'startDate' => '2026-10-26 10:00:00', 'endDate' => '2026-10-26 11:00:00',
        ]])->reply(200)->withBody($json);
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertModelEqualsToResponse($json, $client->knowledgeBase->documentsHistory($request));
    }

    public function testAttachFile(): void
    {
        $request = new FilesEditRequest();
        $request->file = new File();
        $request->file->filename = 'manual.txt';
        $attachment = new Attachment();
        $attachment->knowledgeBaseDocument = new AttachmentKnowledgeBaseDocument();
        $attachment->knowledgeBaseDocument->id = 7;
        $request->file->attachment = [$attachment];
        $mock = self::createApiMockBuilder('files/9/edit');
        $mock->matchMethod('POST')->matchJsonFormField('file', [
            'filename' => 'manual.txt', 'attachment' => [['knowledgeBaseDocument' => ['id' => 7]]],
        ])->reply(200)->withBody('{"success":true}');
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertTrue($client->files->edit(9, $request)->success);
    }

    public function testSectionsCreate(): void
    {
        $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseSectionsCreateRequest();
        $request->section = new KnowledgeBaseSectionInput();
        $request->section->name = 'Shipping';
        $request->section->parentId = 0;
        $mock = self::createApiMockBuilder('knowledge-base/sections/create');
        $mock->matchMethod('POST')->matchJsonFormField('section', [
            'name' => 'Shipping', 'parentId' => 0,
        ])->reply(201)->withBody('{"success":true,"id":7}');
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertSame(7, $client->knowledgeBase->sectionsCreate($request)->id);
    }

    public function testSectionsEdit(): void
    {
        $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseSectionsEditRequest();
        $request->section = new KnowledgeBaseSectionInput();
        $request->section->parentId = 0;
        $mock = self::createApiMockBuilder('knowledge-base/sections/7/edit');
        $mock->matchMethod('POST')->matchJsonFormField('section', [
            'parentId' => 0,
        ])->reply(200)->withBody('{"success":true,"id":7}');
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertSame(7, $client->knowledgeBase->sectionsEdit(7, $request)->id);
    }

    public function testSectionsDelete(): void
    {
        $mock = self::createApiMockBuilder('knowledge-base/sections/7/delete');
        $mock->matchMethod('POST')->reply(200)->withBody('{"success":true}');
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertTrue($client->knowledgeBase->sectionsDelete(7)->success);
    }

    public function testDocumentsCreate(): void
    {
        $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsCreateRequest();
        $request->document = new KnowledgeBaseDocumentInput();
        $request->document->title = 'Shipping';
        $request->document->content = '';
        $request->document->sectionId = 0;
        $request->document->availableForCopilot = false;
        $request->document->externalId = 'doc-7';
        $mock = self::createApiMockBuilder('knowledge-base/documents/create');
        $mock->matchMethod('POST')->matchJsonFormField('document', [
            'title' => 'Shipping', 'content' => '', 'sectionId' => 0, 'availableForCopilot' => false, 'externalId' => 'doc-7',
        ])->reply(201)->withBody('{"success":true,"id":7}');
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertSame(7, $client->knowledgeBase->documentsCreate($request)->id);
    }

    public function testDocumentsEdit(): void
    {
        $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsEditRequest();
        $request->document = new KnowledgeBaseDocumentInput();
        $request->document->content = '';
        $request->document->sectionId = 0;
        $request->document->availableForCopilot = false;
        $request->by = 'id';
        $mock = self::createApiMockBuilder('knowledge-base/documents/7/edit');
        $mock->matchMethod('POST')->matchJsonFormField('document', [
            'content' => '', 'sectionId' => 0, 'availableForCopilot' => false,
        ])->matchFormData(['by' => 'id'])->reply(200)->withBody('{"success":true,"id":7}');
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertSame(7, $client->knowledgeBase->documentsEdit(7, $request)->id);
    }

    public function testDocumentsDelete(): void
    {
        $request = new KnowledgeBaseDocumentByRequest();
        $request->by = 'id';
        $mock = self::createApiMockBuilder('knowledge-base/documents/7/delete');
        $mock->matchMethod('POST')->matchFormData(['by' => 'id'])->reply(200)->withBody('{"success":true}');
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertTrue($client->knowledgeBase->documentsDelete(7, $request)->success);
    }

    public function testMissingDocument(): void
    {
        $mock = self::createApiMockBuilder('knowledge-base/documents/missing');
        $mock->matchMethod('GET')->reply(404)->withBody('{"success":false,"errorMsg":"Document not found"}');
        $client = TestClientFactory::createClient($mock->getClient());
        $this->expectException(\RetailCrm\Api\Interfaces\ApiExceptionInterface::class);
        $client->knowledgeBase->documentsGet('missing');
    }

    public function testNullDocumentFields(): void
    {
        $mock = self::createApiMockBuilder('knowledge-base/documents/doc-7');
        $mock->matchMethod('GET')->reply(200)->withBody(
            '{"success":true,"document":{"id":7,"sectionId":null,"content":null,"file":null,"externalId":null}}'
        );
        $client = TestClientFactory::createClient($mock->getClient());
        $document = $client->knowledgeBase->documentsGet('doc-7')->document;
        self::assertNull($document->sectionId);
        self::assertNull($document->content);
        self::assertNull($document->file);
        self::assertNull($document->externalId);
    }

    public function testClearExternalId(): void
    {
        $request = new \RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsEditRequest();
        $request->by = 'id';
        $request->document = ['externalId' => null];
        $mock = self::createApiMockBuilder('knowledge-base/documents/7/edit');
        $mock->matchMethod('POST')->matchJsonFormField('document', ['externalId' => null])
            ->matchFormData(['by' => 'id'])->reply(200)->withBody('{"success":true,"id":7}');
        $client = TestClientFactory::createClient($mock->getClient());
        self::assertSame(7, $client->knowledgeBase->documentsEdit(7, $request)->id);
    }
}
