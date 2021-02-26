<?php

function serialize_RetailCrm_Api_Model_Response_Files_FilesResponse(RetailCrm\Api\Model\Response\Files\FilesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->pagination) {
    $jsonData["pagination"] = [];
if (null !== $model->pagination->limit) {
    $jsonData["pagination"]["limit"] = $model->pagination->limit;
}
if (null !== $model->pagination->totalCount) {
    $jsonData["pagination"]["totalCount"] = $model->pagination->totalCount;
}
if (null !== $model->pagination->currentPage) {
    $jsonData["pagination"]["currentPage"] = $model->pagination->currentPage;
}
if (null !== $model->pagination->totalPageCount) {
    $jsonData["pagination"]["totalPageCount"] = $model->pagination->totalPageCount;
}

if (0 === \count($jsonData["pagination"])) {
    $jsonData["pagination"] = $emptyObject;
}

}
if (null !== $model->files) {
    $jsonData["files"] = [];
foreach (array_keys($model->files) as $index9) {
    $jsonData["files"][$index9] = [];
if (null !== $model->files[$index9]->id) {
    $jsonData["files"][$index9]["id"] = $model->files[$index9]->id;
}
if (null !== $model->files[$index9]->filename) {
    $jsonData["files"][$index9]["filename"] = $model->files[$index9]->filename;
}
if (null !== $model->files[$index9]->type) {
    $jsonData["files"][$index9]["type"] = $model->files[$index9]->type;
}
if (null !== $model->files[$index9]->createdAt) {
    $jsonData["files"][$index9]["createdAt"] = $model->files[$index9]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->files[$index9]->size) {
    $jsonData["files"][$index9]["size"] = $model->files[$index9]->size;
}
if (null !== $model->files[$index9]->attachment) {
    $jsonData["files"][$index9]["attachment"] = [];
foreach (array_keys($model->files[$index9]->attachment) as $index32) {
    $jsonData["files"][$index9]["attachment"][$index32] = [];
if (null !== $model->files[$index9]->attachment[$index32]->customer) {
    $jsonData["files"][$index9]["attachment"][$index32]["customer"] = [];
if (null !== $model->files[$index9]->attachment[$index32]->customer->id) {
    $jsonData["files"][$index9]["attachment"][$index32]["customer"]["id"] = $model->files[$index9]->attachment[$index32]->customer->id;
}
if (null !== $model->files[$index9]->attachment[$index32]->customer->externalId) {
    $jsonData["files"][$index9]["attachment"][$index32]["customer"]["externalId"] = $model->files[$index9]->attachment[$index32]->customer->externalId;
}
if (null !== $model->files[$index9]->attachment[$index32]->customer->site) {
    $jsonData["files"][$index9]["attachment"][$index32]["customer"]["site"] = $model->files[$index9]->attachment[$index32]->customer->site;
}

if (0 === \count($jsonData["files"][$index9]["attachment"][$index32]["customer"])) {
    $jsonData["files"][$index9]["attachment"][$index32]["customer"] = $emptyObject;
}

}
if (null !== $model->files[$index9]->attachment[$index32]->order) {
    $jsonData["files"][$index9]["attachment"][$index32]["order"] = [];
if (null !== $model->files[$index9]->attachment[$index32]->order->id) {
    $jsonData["files"][$index9]["attachment"][$index32]["order"]["id"] = $model->files[$index9]->attachment[$index32]->order->id;
}
if (null !== $model->files[$index9]->attachment[$index32]->order->number) {
    $jsonData["files"][$index9]["attachment"][$index32]["order"]["number"] = $model->files[$index9]->attachment[$index32]->order->number;
}
if (null !== $model->files[$index9]->attachment[$index32]->order->externalId) {
    $jsonData["files"][$index9]["attachment"][$index32]["order"]["externalId"] = $model->files[$index9]->attachment[$index32]->order->externalId;
}
if (null !== $model->files[$index9]->attachment[$index32]->order->site) {
    $jsonData["files"][$index9]["attachment"][$index32]["order"]["site"] = $model->files[$index9]->attachment[$index32]->order->site;
}

if (0 === \count($jsonData["files"][$index9]["attachment"][$index32]["order"])) {
    $jsonData["files"][$index9]["attachment"][$index32]["order"] = $emptyObject;
}

}

if (0 === \count($jsonData["files"][$index9]["attachment"][$index32])) {
    $jsonData["files"][$index9]["attachment"][$index32] = $emptyObject;
}

}

}

if (0 === \count($jsonData["files"][$index9])) {
    $jsonData["files"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
