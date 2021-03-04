<?php

function serialize_RetailCrm_Api_Model_Response_Inventories_InventoriesResponse(RetailCrm\Api\Model\Response\Inventories\InventoriesResponse $model, bool $useStdClass = true)
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
if (null !== $model->offers) {
    $jsonData["offers"] = [];
foreach (array_keys($model->offers) as $index10) {
    $jsonData["offers"][$index10] = [];
if (null !== $model->offers[$index10]->displayName) {
    $jsonData["offers"][$index10]["displayName"] = $model->offers[$index10]->displayName;
}
if (null !== $model->offers[$index10]->id) {
    $jsonData["offers"][$index10]["id"] = $model->offers[$index10]->id;
}
if (null !== $model->offers[$index10]->externalId) {
    $jsonData["offers"][$index10]["externalId"] = $model->offers[$index10]->externalId;
}
if (null !== $model->offers[$index10]->xmlId) {
    $jsonData["offers"][$index10]["xmlId"] = $model->offers[$index10]->xmlId;
}
if (null !== $model->offers[$index10]->name) {
    $jsonData["offers"][$index10]["name"] = $model->offers[$index10]->name;
}
if (null !== $model->offers[$index10]->article) {
    $jsonData["offers"][$index10]["article"] = $model->offers[$index10]->article;
}
if (null !== $model->offers[$index10]->vatRate) {
    $jsonData["offers"][$index10]["vatRate"] = $model->offers[$index10]->vatRate;
}
if (null !== $model->offers[$index10]->unit) {
    $jsonData["offers"][$index10]["unit"] = [];
if (null !== $model->offers[$index10]->unit->code) {
    $jsonData["offers"][$index10]["unit"]["code"] = $model->offers[$index10]->unit->code;
}
if (null !== $model->offers[$index10]->unit->name) {
    $jsonData["offers"][$index10]["unit"]["name"] = $model->offers[$index10]->unit->name;
}
if (null !== $model->offers[$index10]->unit->sym) {
    $jsonData["offers"][$index10]["unit"]["sym"] = $model->offers[$index10]->unit->sym;
}

if (0 === \count($jsonData["offers"][$index10]["unit"])) {
    $jsonData["offers"][$index10]["unit"] = $emptyObject;
}

}
if (null !== $model->offers[$index10]->barcode) {
    $jsonData["offers"][$index10]["barcode"] = $model->offers[$index10]->barcode;
}
if (null !== $model->offers[$index10]->properties) {
    $jsonData["offers"][$index10]["properties"] = [];
foreach (array_keys($model->offers[$index10]->properties) as $index34) {
    $jsonData["offers"][$index10]["properties"] = $model->offers[$index10]->properties;
}

}
if (null !== $model->offers[$index10]->site) {
    $jsonData["offers"][$index10]["site"] = $model->offers[$index10]->site;
}
if (null !== $model->offers[$index10]->purchasePrice) {
    $jsonData["offers"][$index10]["purchasePrice"] = $model->offers[$index10]->purchasePrice;
}
if (null !== $model->offers[$index10]->quantity) {
    $jsonData["offers"][$index10]["quantity"] = $model->offers[$index10]->quantity;
}
if (null !== $model->offers[$index10]->stores) {
    $jsonData["offers"][$index10]["stores"] = [];
if (null !== $model->offers[$index10]->stores->quantity) {
    $jsonData["offers"][$index10]["stores"]["quantity"] = $model->offers[$index10]->stores->quantity;
}
if (null !== $model->offers[$index10]->stores->purchasePrice) {
    $jsonData["offers"][$index10]["stores"]["purchasePrice"] = $model->offers[$index10]->stores->purchasePrice;
}
if (null !== $model->offers[$index10]->stores->store) {
    $jsonData["offers"][$index10]["stores"]["store"] = $model->offers[$index10]->stores->store;
}

if (0 === \count($jsonData["offers"][$index10]["stores"])) {
    $jsonData["offers"][$index10]["stores"] = $emptyObject;
}

}

if (0 === \count($jsonData["offers"][$index10])) {
    $jsonData["offers"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
