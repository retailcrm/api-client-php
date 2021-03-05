<?php

function serialize_RetailCrm_Api_Model_Response_Store_InventoriesUploadResponse(RetailCrm\Api\Model\Response\Store\InventoriesUploadResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->processedOffersCount) {
    $jsonData["processedOffersCount"] = $model->processedOffersCount;
}
if (null !== $model->notFoundOffers) {
    $jsonData["notFoundOffers"] = [];
foreach (array_keys($model->notFoundOffers) as $index18) {
    $jsonData["notFoundOffers"][$index18] = [];
if (null !== $model->notFoundOffers[$index18]->displayName) {
    $jsonData["notFoundOffers"][$index18]["displayName"] = $model->notFoundOffers[$index18]->displayName;
}
if (null !== $model->notFoundOffers[$index18]->id) {
    $jsonData["notFoundOffers"][$index18]["id"] = $model->notFoundOffers[$index18]->id;
}
if (null !== $model->notFoundOffers[$index18]->externalId) {
    $jsonData["notFoundOffers"][$index18]["externalId"] = $model->notFoundOffers[$index18]->externalId;
}
if (null !== $model->notFoundOffers[$index18]->xmlId) {
    $jsonData["notFoundOffers"][$index18]["xmlId"] = $model->notFoundOffers[$index18]->xmlId;
}
if (null !== $model->notFoundOffers[$index18]->name) {
    $jsonData["notFoundOffers"][$index18]["name"] = $model->notFoundOffers[$index18]->name;
}
if (null !== $model->notFoundOffers[$index18]->article) {
    $jsonData["notFoundOffers"][$index18]["article"] = $model->notFoundOffers[$index18]->article;
}
if (null !== $model->notFoundOffers[$index18]->vatRate) {
    $jsonData["notFoundOffers"][$index18]["vatRate"] = $model->notFoundOffers[$index18]->vatRate;
}
if (null !== $model->notFoundOffers[$index18]->unit) {
    $jsonData["notFoundOffers"][$index18]["unit"] = [];
if (null !== $model->notFoundOffers[$index18]->unit->code) {
    $jsonData["notFoundOffers"][$index18]["unit"]["code"] = $model->notFoundOffers[$index18]->unit->code;
}
if (null !== $model->notFoundOffers[$index18]->unit->name) {
    $jsonData["notFoundOffers"][$index18]["unit"]["name"] = $model->notFoundOffers[$index18]->unit->name;
}
if (null !== $model->notFoundOffers[$index18]->unit->sym) {
    $jsonData["notFoundOffers"][$index18]["unit"]["sym"] = $model->notFoundOffers[$index18]->unit->sym;
}

if (0 === \count($jsonData["notFoundOffers"][$index18]["unit"])) {
    $jsonData["notFoundOffers"][$index18]["unit"] = $emptyObject;
}

}
if (null !== $model->notFoundOffers[$index18]->barcode) {
    $jsonData["notFoundOffers"][$index18]["barcode"] = $model->notFoundOffers[$index18]->barcode;
}
if (null !== $model->notFoundOffers[$index18]->properties) {
    $jsonData["notFoundOffers"][$index18]["properties"] = [];
foreach (array_keys($model->notFoundOffers[$index18]->properties) as $index42) {
    $jsonData["notFoundOffers"][$index18]["properties"] = $model->notFoundOffers[$index18]->properties;
}

}
if (null !== $model->notFoundOffers[$index18]->site) {
    $jsonData["notFoundOffers"][$index18]["site"] = $model->notFoundOffers[$index18]->site;
}
if (null !== $model->notFoundOffers[$index18]->purchasePrice) {
    $jsonData["notFoundOffers"][$index18]["purchasePrice"] = $model->notFoundOffers[$index18]->purchasePrice;
}
if (null !== $model->notFoundOffers[$index18]->quantity) {
    $jsonData["notFoundOffers"][$index18]["quantity"] = $model->notFoundOffers[$index18]->quantity;
}
if (null !== $model->notFoundOffers[$index18]->stores) {
    $jsonData["notFoundOffers"][$index18]["stores"] = [];
foreach (array_keys($model->notFoundOffers[$index18]->stores) as $index38) {
    $jsonData["notFoundOffers"][$index18]["stores"][$index38] = [];
if (null !== $model->notFoundOffers[$index18]->stores[$index38]->quantity) {
    $jsonData["notFoundOffers"][$index18]["stores"][$index38]["quantity"] = $model->notFoundOffers[$index18]->stores[$index38]->quantity;
}
if (null !== $model->notFoundOffers[$index18]->stores[$index38]->purchasePrice) {
    $jsonData["notFoundOffers"][$index18]["stores"][$index38]["purchasePrice"] = $model->notFoundOffers[$index18]->stores[$index38]->purchasePrice;
}
if (null !== $model->notFoundOffers[$index18]->stores[$index38]->store) {
    $jsonData["notFoundOffers"][$index18]["stores"][$index38]["store"] = $model->notFoundOffers[$index18]->stores[$index38]->store;
}
if (null !== $model->notFoundOffers[$index18]->stores[$index38]->code) {
    $jsonData["notFoundOffers"][$index18]["stores"][$index38]["code"] = $model->notFoundOffers[$index18]->stores[$index38]->code;
}
if (null !== $model->notFoundOffers[$index18]->stores[$index38]->available) {
    $jsonData["notFoundOffers"][$index18]["stores"][$index38]["available"] = $model->notFoundOffers[$index18]->stores[$index38]->available;
}

if (0 === \count($jsonData["notFoundOffers"][$index18]["stores"][$index38])) {
    $jsonData["notFoundOffers"][$index18]["stores"][$index38] = $emptyObject;
}

}

}

if (0 === \count($jsonData["notFoundOffers"][$index18])) {
    $jsonData["notFoundOffers"][$index18] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
