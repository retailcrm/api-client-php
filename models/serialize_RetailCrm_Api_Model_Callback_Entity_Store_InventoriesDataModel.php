<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Store_InventoriesDataModel(RetailCrm\Api\Model\Callback\Entity\Store\InventoriesDataModel $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
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
foreach (array_keys($model->offers[$index10]->stores) as $index30) {
    $jsonData["offers"][$index10]["stores"][$index30] = [];
if (null !== $model->offers[$index10]->stores[$index30]->quantity) {
    $jsonData["offers"][$index10]["stores"][$index30]["quantity"] = $model->offers[$index10]->stores[$index30]->quantity;
}
if (null !== $model->offers[$index10]->stores[$index30]->purchasePrice) {
    $jsonData["offers"][$index10]["stores"][$index30]["purchasePrice"] = $model->offers[$index10]->stores[$index30]->purchasePrice;
}
if (null !== $model->offers[$index10]->stores[$index30]->store) {
    $jsonData["offers"][$index10]["stores"][$index30]["store"] = $model->offers[$index10]->stores[$index30]->store;
}
if (null !== $model->offers[$index10]->stores[$index30]->code) {
    $jsonData["offers"][$index10]["stores"][$index30]["code"] = $model->offers[$index10]->stores[$index30]->code;
}
if (null !== $model->offers[$index10]->stores[$index30]->available) {
    $jsonData["offers"][$index10]["stores"][$index30]["available"] = $model->offers[$index10]->stores[$index30]->available;
}

if (0 === \count($jsonData["offers"][$index10]["stores"][$index30])) {
    $jsonData["offers"][$index10]["stores"][$index30] = $emptyObject;
}

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
