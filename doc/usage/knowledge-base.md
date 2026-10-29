# Knowledge base

The `knowledgeBase` resource group manages company documents and sections through REST API v5.
The API key needs `knowledge_base_read` for reads and `knowledge_base_write` for writes.
Documents are account-wide; there is no `site` parameter.

```php
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentInput;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentByRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsCreateRequest;
use RetailCrm\Api\Model\Request\KnowledgeBase\KnowledgeBaseDocumentsEditRequest;

$client = SimpleClientFactory::createClient('https://example.retailcrm.ru', 'apiKey');
$sections = $client->knowledgeBase->sections()->sections;

$request = new KnowledgeBaseDocumentsCreateRequest();
$request->document = new KnowledgeBaseDocumentInput();
$request->document->title = 'Shipping';
$request->document->content = '# Shipping options';
$request->document->externalId = 'shipping';
$request->document->availableForCopilot = true;
$id = $client->knowledgeBase->documentsCreate($request)->id;

$document = $client->knowledgeBase->documentsGet($id, new KnowledgeBaseDocumentByRequest('id'))->document;
// Without a by request, the identifier is treated as externalId.
$document = $client->knowledgeBase->documentsGet('shipping')->document;

$edit = new KnowledgeBaseDocumentsEditRequest();
$edit->by = 'id';
$edit->document = new KnowledgeBaseDocumentInput();
$edit->document->availableForCopilot = false;
$client->knowledgeBase->documentsEdit($id, $edit);
```

Only populated input fields are sent on edit. Null properties are omitted, as in other client models.
Use `sectionId = 0` to remove a document from its section, `parentId = 0` to move a section to the root,
and `content = ''` to clear text. False boolean values are preserved.
To send an explicit JSON null (for example, to release an external ID), the edit request also accepts an array:

```php
$edit = new KnowledgeBaseDocumentsEditRequest();
$edit->by = 'id';
$edit->document = ['externalId' => null];
$client->knowledgeBase->documentsEdit($id, $edit);
```

Sections are returned without pagination. Documents use `page`, `limit` and a
`KnowledgeBaseDocumentFilter`: `ids`, `externalIds`, `sectionId`, `directOnly`,
`availableForCopilot`, `hasFile`, `search`. A section filter includes subsections unless `directOnly` is true.
With `directOnly = true` and no section, only root documents are selected.

`documentsHistory()` accepts `KnowledgeBaseDocumentsHistoryRequest` and
`KnowledgeBaseDocumentHistoryFilter` (`sinceId`, `documentId`, `startDate`, `endDate`).
Store the last history ID to retrieve subsequent changes. Content changes carry hashes, not document text;
fetch the document again to read the current content. Sections have no history endpoint.

## Files

Use the existing `files->upload()` method to upload the original file, then attach it:

```php
use RetailCrm\Api\Model\Entity\Files\Attachment;
use RetailCrm\Api\Model\Entity\Files\AttachmentKnowledgeBaseDocument;
use RetailCrm\Api\Model\Entity\Files\File;
use RetailCrm\Api\Model\Request\Files\FilesEditRequest;

$attachment = new Attachment();
$attachment->knowledgeBaseDocument = new AttachmentKnowledgeBaseDocument();
$attachment->knowledgeBaseDocument->id = $id;
$request = new FilesEditRequest();
$request->file = new File();
$request->file->filename = 'shipping.pdf';
$request->file->attachment = [$attachment];
// $fileId is the ID returned by files->upload().
$client->files->edit($fileId, $request);
```

File operations require the corresponding `file_read` / `file_write` scopes.
A document supports one original file. Its download URL is returned in `document->file->url`.

`sectionsDelete()` deletes the section **together with its subsections and their documents**.
`documentsDelete()` removes one document and accepts the same `by` request as `documentsGet()`.
