<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Package(RetailCrm\Api\Model\Callback\Entity\Delivery\Package $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->weight) {
    $jsonData["weight"] = $model->weight;
}
if (null !== $model->packageId) {
    $jsonData["packageId"] = $model->packageId;
}
if (null !== $model->width) {
    $jsonData["width"] = $model->width;
}
if (null !== $model->length) {
    $jsonData["length"] = $model->length;
}
if (null !== $model->height) {
    $jsonData["height"] = $model->height;
}
if (null !== $model->items) {
    $jsonData["items"] = [];
foreach (array_keys($model->items) as $index9) {
    $jsonData["items"][$index9] = [];
if (null !== $model->items[$index9]->offerId) {
    $jsonData["items"][$index9]["offerId"] = $model->items[$index9]->offerId;
}
if (null !== $model->items[$index9]->externalId) {
    $jsonData["items"][$index9]["externalId"] = $model->items[$index9]->externalId;
}
if (null !== $model->items[$index9]->xmlId) {
    $jsonData["items"][$index9]["xmlId"] = $model->items[$index9]->xmlId;
}
if (null !== $model->items[$index9]->name) {
    $jsonData["items"][$index9]["name"] = $model->items[$index9]->name;
}
if (null !== $model->items[$index9]->declaredValue) {
    $jsonData["items"][$index9]["declaredValue"] = $model->items[$index9]->declaredValue;
}
if (null !== $model->items[$index9]->cod) {
    $jsonData["items"][$index9]["cod"] = $model->items[$index9]->cod;
}
if (null !== $model->items[$index9]->vatRate) {
    $jsonData["items"][$index9]["vatRate"] = $model->items[$index9]->vatRate;
}
if (null !== $model->items[$index9]->quantity) {
    $jsonData["items"][$index9]["quantity"] = $model->items[$index9]->quantity;
}
if (null !== $model->items[$index9]->unit) {
    $jsonData["items"][$index9]["unit"] = [];
if (null !== $model->items[$index9]->unit->code) {
    $jsonData["items"][$index9]["unit"]["code"] = $model->items[$index9]->unit->code;
}
if (null !== $model->items[$index9]->unit->name) {
    $jsonData["items"][$index9]["unit"]["name"] = $model->items[$index9]->unit->name;
}
if (null !== $model->items[$index9]->unit->sym) {
    $jsonData["items"][$index9]["unit"]["sym"] = $model->items[$index9]->unit->sym;
}

if (0 === \count($jsonData["items"][$index9]["unit"])) {
    $jsonData["items"][$index9]["unit"] = $emptyObject;
}

}
if (null !== $model->items[$index9]->cost) {
    $jsonData["items"][$index9]["cost"] = $model->items[$index9]->cost;
}
if (null !== $model->items[$index9]->markingCodes) {
    $jsonData["items"][$index9]["markingCodes"] = $model->items[$index9]->markingCodes;
}
if (null !== $model->items[$index9]->properties) {
    $jsonData["items"][$index9]["properties"] = [];
foreach (array_keys($model->items[$index9]->properties) as $index32) {
    $jsonData["items"][$index9]["properties"] = $model->items[$index9]->properties;
}

}

if (0 === \count($jsonData["items"][$index9])) {
    $jsonData["items"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
