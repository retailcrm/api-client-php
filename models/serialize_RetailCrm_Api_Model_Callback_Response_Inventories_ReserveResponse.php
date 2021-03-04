<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Inventories_ReserveResponse(RetailCrm\Api\Model\Callback\Response\Inventories\ReserveResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->errorMsg) {
    $jsonData["errorMsg"] = $model->errorMsg;
}
if (null !== $model->inventories) {
    $jsonData["inventories"] = [];
foreach (array_keys($model->inventories) as $index15) {
    $jsonData["inventories"][$index15] = [];
if (null !== $model->inventories[$index15]->offers) {
    $jsonData["inventories"][$index15]["offers"] = [];
foreach (array_keys($model->inventories[$index15]->offers) as $index35) {
    $jsonData["inventories"][$index15]["offers"][$index35] = [];
if (null !== $model->inventories[$index15]->offers[$index35]->displayName) {
    $jsonData["inventories"][$index15]["offers"][$index35]["displayName"] = $model->inventories[$index15]->offers[$index35]->displayName;
}
if (null !== $model->inventories[$index15]->offers[$index35]->id) {
    $jsonData["inventories"][$index15]["offers"][$index35]["id"] = $model->inventories[$index15]->offers[$index35]->id;
}
if (null !== $model->inventories[$index15]->offers[$index35]->externalId) {
    $jsonData["inventories"][$index15]["offers"][$index35]["externalId"] = $model->inventories[$index15]->offers[$index35]->externalId;
}
if (null !== $model->inventories[$index15]->offers[$index35]->xmlId) {
    $jsonData["inventories"][$index15]["offers"][$index35]["xmlId"] = $model->inventories[$index15]->offers[$index35]->xmlId;
}
if (null !== $model->inventories[$index15]->offers[$index35]->name) {
    $jsonData["inventories"][$index15]["offers"][$index35]["name"] = $model->inventories[$index15]->offers[$index35]->name;
}
if (null !== $model->inventories[$index15]->offers[$index35]->article) {
    $jsonData["inventories"][$index15]["offers"][$index35]["article"] = $model->inventories[$index15]->offers[$index35]->article;
}
if (null !== $model->inventories[$index15]->offers[$index35]->vatRate) {
    $jsonData["inventories"][$index15]["offers"][$index35]["vatRate"] = $model->inventories[$index15]->offers[$index35]->vatRate;
}
if (null !== $model->inventories[$index15]->offers[$index35]->unit) {
    $jsonData["inventories"][$index15]["offers"][$index35]["unit"] = [];
if (null !== $model->inventories[$index15]->offers[$index35]->unit->code) {
    $jsonData["inventories"][$index15]["offers"][$index35]["unit"]["code"] = $model->inventories[$index15]->offers[$index35]->unit->code;
}
if (null !== $model->inventories[$index15]->offers[$index35]->unit->name) {
    $jsonData["inventories"][$index15]["offers"][$index35]["unit"]["name"] = $model->inventories[$index15]->offers[$index35]->unit->name;
}
if (null !== $model->inventories[$index15]->offers[$index35]->unit->sym) {
    $jsonData["inventories"][$index15]["offers"][$index35]["unit"]["sym"] = $model->inventories[$index15]->offers[$index35]->unit->sym;
}

if (0 === \count($jsonData["inventories"][$index15]["offers"][$index35]["unit"])) {
    $jsonData["inventories"][$index15]["offers"][$index35]["unit"] = $emptyObject;
}

}
if (null !== $model->inventories[$index15]->offers[$index35]->barcode) {
    $jsonData["inventories"][$index15]["offers"][$index35]["barcode"] = $model->inventories[$index15]->offers[$index35]->barcode;
}
if (null !== $model->inventories[$index15]->offers[$index35]->properties) {
    $jsonData["inventories"][$index15]["offers"][$index35]["properties"] = [];
foreach (array_keys($model->inventories[$index15]->offers[$index35]->properties) as $index59) {
    $jsonData["inventories"][$index15]["offers"][$index35]["properties"] = $model->inventories[$index15]->offers[$index35]->properties;
}

}
if (null !== $model->inventories[$index15]->offers[$index35]->site) {
    $jsonData["inventories"][$index15]["offers"][$index35]["site"] = $model->inventories[$index15]->offers[$index35]->site;
}
if (null !== $model->inventories[$index15]->offers[$index35]->purchasePrice) {
    $jsonData["inventories"][$index15]["offers"][$index35]["purchasePrice"] = $model->inventories[$index15]->offers[$index35]->purchasePrice;
}
if (null !== $model->inventories[$index15]->offers[$index35]->quantity) {
    $jsonData["inventories"][$index15]["offers"][$index35]["quantity"] = $model->inventories[$index15]->offers[$index35]->quantity;
}
if (null !== $model->inventories[$index15]->offers[$index35]->stores) {
    $jsonData["inventories"][$index15]["offers"][$index35]["stores"] = [];
if (null !== $model->inventories[$index15]->offers[$index35]->stores->quantity) {
    $jsonData["inventories"][$index15]["offers"][$index35]["stores"]["quantity"] = $model->inventories[$index15]->offers[$index35]->stores->quantity;
}
if (null !== $model->inventories[$index15]->offers[$index35]->stores->purchasePrice) {
    $jsonData["inventories"][$index15]["offers"][$index35]["stores"]["purchasePrice"] = $model->inventories[$index15]->offers[$index35]->stores->purchasePrice;
}
if (null !== $model->inventories[$index15]->offers[$index35]->stores->store) {
    $jsonData["inventories"][$index15]["offers"][$index35]["stores"]["store"] = $model->inventories[$index15]->offers[$index35]->stores->store;
}

if (0 === \count($jsonData["inventories"][$index15]["offers"][$index35]["stores"])) {
    $jsonData["inventories"][$index15]["offers"][$index35]["stores"] = $emptyObject;
}

}

if (0 === \count($jsonData["inventories"][$index15]["offers"][$index35])) {
    $jsonData["inventories"][$index15]["offers"][$index35] = $emptyObject;
}

}

}

if (0 === \count($jsonData["inventories"][$index15])) {
    $jsonData["inventories"][$index15] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
