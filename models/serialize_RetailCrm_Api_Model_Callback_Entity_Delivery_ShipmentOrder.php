<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_ShipmentOrder(RetailCrm\Api\Model\Callback\Entity\Delivery\ShipmentOrder $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->deliveryId) {
    $jsonData["deliveryId"] = $model->deliveryId;
}
if (null !== $model->packages) {
    $jsonData["packages"] = [];
foreach (array_keys($model->packages) as $index12) {
    $jsonData["packages"][$index12] = [];
if (null !== $model->packages[$index12]->weight) {
    $jsonData["packages"][$index12]["weight"] = $model->packages[$index12]->weight;
}
if (null !== $model->packages[$index12]->packageId) {
    $jsonData["packages"][$index12]["packageId"] = $model->packages[$index12]->packageId;
}
if (null !== $model->packages[$index12]->width) {
    $jsonData["packages"][$index12]["width"] = $model->packages[$index12]->width;
}
if (null !== $model->packages[$index12]->length) {
    $jsonData["packages"][$index12]["length"] = $model->packages[$index12]->length;
}
if (null !== $model->packages[$index12]->height) {
    $jsonData["packages"][$index12]["height"] = $model->packages[$index12]->height;
}
if (null !== $model->packages[$index12]->items) {
    $jsonData["packages"][$index12]["items"] = [];
foreach (array_keys($model->packages[$index12]->items) as $index31) {
    $jsonData["packages"][$index12]["items"][$index31] = [];
if (null !== $model->packages[$index12]->items[$index31]->offerId) {
    $jsonData["packages"][$index12]["items"][$index31]["offerId"] = $model->packages[$index12]->items[$index31]->offerId;
}
if (null !== $model->packages[$index12]->items[$index31]->externalId) {
    $jsonData["packages"][$index12]["items"][$index31]["externalId"] = $model->packages[$index12]->items[$index31]->externalId;
}
if (null !== $model->packages[$index12]->items[$index31]->xmlId) {
    $jsonData["packages"][$index12]["items"][$index31]["xmlId"] = $model->packages[$index12]->items[$index31]->xmlId;
}
if (null !== $model->packages[$index12]->items[$index31]->name) {
    $jsonData["packages"][$index12]["items"][$index31]["name"] = $model->packages[$index12]->items[$index31]->name;
}
if (null !== $model->packages[$index12]->items[$index31]->declaredValue) {
    $jsonData["packages"][$index12]["items"][$index31]["declaredValue"] = $model->packages[$index12]->items[$index31]->declaredValue;
}
if (null !== $model->packages[$index12]->items[$index31]->cod) {
    $jsonData["packages"][$index12]["items"][$index31]["cod"] = $model->packages[$index12]->items[$index31]->cod;
}
if (null !== $model->packages[$index12]->items[$index31]->vatRate) {
    $jsonData["packages"][$index12]["items"][$index31]["vatRate"] = $model->packages[$index12]->items[$index31]->vatRate;
}
if (null !== $model->packages[$index12]->items[$index31]->quantity) {
    $jsonData["packages"][$index12]["items"][$index31]["quantity"] = $model->packages[$index12]->items[$index31]->quantity;
}
if (null !== $model->packages[$index12]->items[$index31]->unit) {
    $jsonData["packages"][$index12]["items"][$index31]["unit"] = [];
if (null !== $model->packages[$index12]->items[$index31]->unit->code) {
    $jsonData["packages"][$index12]["items"][$index31]["unit"]["code"] = $model->packages[$index12]->items[$index31]->unit->code;
}
if (null !== $model->packages[$index12]->items[$index31]->unit->name) {
    $jsonData["packages"][$index12]["items"][$index31]["unit"]["name"] = $model->packages[$index12]->items[$index31]->unit->name;
}
if (null !== $model->packages[$index12]->items[$index31]->unit->sym) {
    $jsonData["packages"][$index12]["items"][$index31]["unit"]["sym"] = $model->packages[$index12]->items[$index31]->unit->sym;
}

if (0 === \count($jsonData["packages"][$index12]["items"][$index31]["unit"])) {
    $jsonData["packages"][$index12]["items"][$index31]["unit"] = $emptyObject;
}

}
if (null !== $model->packages[$index12]->items[$index31]->cost) {
    $jsonData["packages"][$index12]["items"][$index31]["cost"] = $model->packages[$index12]->items[$index31]->cost;
}
if (null !== $model->packages[$index12]->items[$index31]->markingCodes) {
    $jsonData["packages"][$index12]["items"][$index31]["markingCodes"] = $model->packages[$index12]->items[$index31]->markingCodes;
}
if (null !== $model->packages[$index12]->items[$index31]->properties) {
    $jsonData["packages"][$index12]["items"][$index31]["properties"] = [];
foreach (array_keys($model->packages[$index12]->items[$index31]->properties) as $index55) {
    $jsonData["packages"][$index12]["items"][$index31]["properties"] = $model->packages[$index12]->items[$index31]->properties;
}

}

if (0 === \count($jsonData["packages"][$index12]["items"][$index31])) {
    $jsonData["packages"][$index12]["items"][$index31] = $emptyObject;
}

}

}

if (0 === \count($jsonData["packages"][$index12])) {
    $jsonData["packages"][$index12] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
