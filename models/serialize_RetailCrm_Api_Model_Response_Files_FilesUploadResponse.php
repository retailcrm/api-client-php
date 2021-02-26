<?php

function serialize_RetailCrm_Api_Model_Response_Files_FilesUploadResponse(RetailCrm\Api\Model\Response\Files\FilesUploadResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->file) {
    $jsonData["file"] = [];
if (null !== $model->file->id) {
    $jsonData["file"]["id"] = $model->file->id;
}
if (null !== $model->file->filename) {
    $jsonData["file"]["filename"] = $model->file->filename;
}
if (null !== $model->file->type) {
    $jsonData["file"]["type"] = $model->file->type;
}
if (null !== $model->file->createdAt) {
    $jsonData["file"]["createdAt"] = $model->file->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->file->size) {
    $jsonData["file"]["size"] = $model->file->size;
}
if (null !== $model->file->attachment) {
    $jsonData["file"]["attachment"] = [];
foreach (array_keys($model->file->attachment) as $index22) {
    $jsonData["file"]["attachment"][$index22] = [];
if (null !== $model->file->attachment[$index22]->customer) {
    $jsonData["file"]["attachment"][$index22]["customer"] = [];
if (null !== $model->file->attachment[$index22]->customer->id) {
    $jsonData["file"]["attachment"][$index22]["customer"]["id"] = $model->file->attachment[$index22]->customer->id;
}
if (null !== $model->file->attachment[$index22]->customer->externalId) {
    $jsonData["file"]["attachment"][$index22]["customer"]["externalId"] = $model->file->attachment[$index22]->customer->externalId;
}
if (null !== $model->file->attachment[$index22]->customer->site) {
    $jsonData["file"]["attachment"][$index22]["customer"]["site"] = $model->file->attachment[$index22]->customer->site;
}

if (0 === \count($jsonData["file"]["attachment"][$index22]["customer"])) {
    $jsonData["file"]["attachment"][$index22]["customer"] = $emptyObject;
}

}
if (null !== $model->file->attachment[$index22]->order) {
    $jsonData["file"]["attachment"][$index22]["order"] = [];
if (null !== $model->file->attachment[$index22]->order->id) {
    $jsonData["file"]["attachment"][$index22]["order"]["id"] = $model->file->attachment[$index22]->order->id;
}
if (null !== $model->file->attachment[$index22]->order->number) {
    $jsonData["file"]["attachment"][$index22]["order"]["number"] = $model->file->attachment[$index22]->order->number;
}
if (null !== $model->file->attachment[$index22]->order->externalId) {
    $jsonData["file"]["attachment"][$index22]["order"]["externalId"] = $model->file->attachment[$index22]->order->externalId;
}
if (null !== $model->file->attachment[$index22]->order->site) {
    $jsonData["file"]["attachment"][$index22]["order"]["site"] = $model->file->attachment[$index22]->order->site;
}

if (0 === \count($jsonData["file"]["attachment"][$index22]["order"])) {
    $jsonData["file"]["attachment"][$index22]["order"] = $emptyObject;
}

}

if (0 === \count($jsonData["file"]["attachment"][$index22])) {
    $jsonData["file"]["attachment"][$index22] = $emptyObject;
}

}

}

if (0 === \count($jsonData["file"])) {
    $jsonData["file"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
