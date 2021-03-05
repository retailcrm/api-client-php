<?php

function serialize_RetailCrm_Api_Model_Entity_Store_Offer(RetailCrm\Api\Model\Entity\Store\Offer $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->displayName) {
    $jsonData["displayName"] = $model->displayName;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->xmlId) {
    $jsonData["xmlId"] = $model->xmlId;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->article) {
    $jsonData["article"] = $model->article;
}
if (null !== $model->vatRate) {
    $jsonData["vatRate"] = $model->vatRate;
}
if (null !== $model->unit) {
    $jsonData["unit"] = [];
if (null !== $model->unit->code) {
    $jsonData["unit"]["code"] = $model->unit->code;
}
if (null !== $model->unit->name) {
    $jsonData["unit"]["name"] = $model->unit->name;
}
if (null !== $model->unit->sym) {
    $jsonData["unit"]["sym"] = $model->unit->sym;
}

if (0 === \count($jsonData["unit"])) {
    $jsonData["unit"] = $emptyObject;
}

}
if (null !== $model->barcode) {
    $jsonData["barcode"] = $model->barcode;
}
if (null !== $model->properties) {
    $jsonData["properties"] = [];
foreach (array_keys($model->properties) as $index14) {
    $jsonData["properties"] = $model->properties;
}

}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->purchasePrice) {
    $jsonData["purchasePrice"] = $model->purchasePrice;
}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}
if (null !== $model->stores) {
    $jsonData["stores"] = [];
foreach (array_keys($model->stores) as $index10) {
    $jsonData["stores"][$index10] = [];
if (null !== $model->stores[$index10]->quantity) {
    $jsonData["stores"][$index10]["quantity"] = $model->stores[$index10]->quantity;
}
if (null !== $model->stores[$index10]->purchasePrice) {
    $jsonData["stores"][$index10]["purchasePrice"] = $model->stores[$index10]->purchasePrice;
}
if (null !== $model->stores[$index10]->store) {
    $jsonData["stores"][$index10]["store"] = $model->stores[$index10]->store;
}
if (null !== $model->stores[$index10]->code) {
    $jsonData["stores"][$index10]["code"] = $model->stores[$index10]->code;
}
if (null !== $model->stores[$index10]->available) {
    $jsonData["stores"][$index10]["available"] = $model->stores[$index10]->available;
}

if (0 === \count($jsonData["stores"][$index10])) {
    $jsonData["stores"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
