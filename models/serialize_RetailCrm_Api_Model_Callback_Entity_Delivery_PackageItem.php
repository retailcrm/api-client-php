<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_PackageItem(RetailCrm\Api\Model\Callback\Entity\Delivery\PackageItem $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->offerId) {
    $jsonData["offerId"] = $model->offerId;
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
if (null !== $model->declaredValue) {
    $jsonData["declaredValue"] = $model->declaredValue;
}
if (null !== $model->cod) {
    $jsonData["cod"] = $model->cod;
}
if (null !== $model->vatRate) {
    $jsonData["vatRate"] = $model->vatRate;
}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
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
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}
if (null !== $model->markingCodes) {
    $jsonData["markingCodes"] = $model->markingCodes;
}
if (null !== $model->properties) {
    $jsonData["properties"] = [];
foreach (array_keys($model->properties) as $index14) {
    $jsonData["properties"] = $model->properties;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
