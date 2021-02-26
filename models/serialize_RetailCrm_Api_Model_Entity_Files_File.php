<?php

function serialize_RetailCrm_Api_Model_Entity_Files_File(RetailCrm\Api\Model\Entity\Files\File $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->filename) {
    $jsonData["filename"] = $model->filename;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->size) {
    $jsonData["size"] = $model->size;
}
if (null !== $model->attachment) {
    $jsonData["attachment"] = [];
foreach (array_keys($model->attachment) as $index14) {
    $jsonData["attachment"][$index14] = [];
if (null !== $model->attachment[$index14]->customer) {
    $jsonData["attachment"][$index14]["customer"] = [];
if (null !== $model->attachment[$index14]->customer->id) {
    $jsonData["attachment"][$index14]["customer"]["id"] = $model->attachment[$index14]->customer->id;
}
if (null !== $model->attachment[$index14]->customer->externalId) {
    $jsonData["attachment"][$index14]["customer"]["externalId"] = $model->attachment[$index14]->customer->externalId;
}
if (null !== $model->attachment[$index14]->customer->site) {
    $jsonData["attachment"][$index14]["customer"]["site"] = $model->attachment[$index14]->customer->site;
}

if (0 === \count($jsonData["attachment"][$index14]["customer"])) {
    $jsonData["attachment"][$index14]["customer"] = $emptyObject;
}

}
if (null !== $model->attachment[$index14]->order) {
    $jsonData["attachment"][$index14]["order"] = [];
if (null !== $model->attachment[$index14]->order->id) {
    $jsonData["attachment"][$index14]["order"]["id"] = $model->attachment[$index14]->order->id;
}
if (null !== $model->attachment[$index14]->order->number) {
    $jsonData["attachment"][$index14]["order"]["number"] = $model->attachment[$index14]->order->number;
}
if (null !== $model->attachment[$index14]->order->externalId) {
    $jsonData["attachment"][$index14]["order"]["externalId"] = $model->attachment[$index14]->order->externalId;
}
if (null !== $model->attachment[$index14]->order->site) {
    $jsonData["attachment"][$index14]["order"]["site"] = $model->attachment[$index14]->order->site;
}

if (0 === \count($jsonData["attachment"][$index14]["order"])) {
    $jsonData["attachment"][$index14]["order"] = $emptyObject;
}

}

if (0 === \count($jsonData["attachment"][$index14])) {
    $jsonData["attachment"][$index14] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
