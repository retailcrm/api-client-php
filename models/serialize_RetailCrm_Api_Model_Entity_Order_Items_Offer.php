<?php

function serialize_RetailCrm_Api_Model_Entity_Order_Items_Offer(RetailCrm\Api\Model\Entity\Order\Items\Offer $model, bool $useStdClass = true)
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

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
