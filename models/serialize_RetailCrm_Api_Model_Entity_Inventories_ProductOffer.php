<?php

function serialize_RetailCrm_Api_Model_Entity_Inventories_ProductOffer(RetailCrm\Api\Model\Entity\Inventories\ProductOffer $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->price) {
    $jsonData["price"] = $model->price;
}
if (null !== $model->images) {
    $jsonData["images"] = $model->images;
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
if (null !== $model->article) {
    $jsonData["article"] = $model->article;
}
if (null !== $model->prices) {
    $jsonData["prices"] = [];
foreach (array_keys($model->prices) as $index10) {
    $jsonData["prices"][$index10] = [];
if (null !== $model->prices[$index10]->priceType) {
    $jsonData["prices"][$index10]["priceType"] = $model->prices[$index10]->priceType;
}
if (null !== $model->prices[$index10]->price) {
    $jsonData["prices"][$index10]["price"] = $model->prices[$index10]->price;
}
if (null !== $model->prices[$index10]->ordering) {
    $jsonData["prices"][$index10]["ordering"] = $model->prices[$index10]->ordering;
}

if (0 === \count($jsonData["prices"][$index10])) {
    $jsonData["prices"][$index10] = $emptyObject;
}

}

}
if (null !== $model->purchasePrice) {
    $jsonData["purchasePrice"] = $model->purchasePrice;
}
if (null !== $model->vatRate) {
    $jsonData["vatRate"] = $model->vatRate;
}
if (null !== $model->properties) {
    $jsonData["properties"] = [];
foreach (array_keys($model->properties) as $index14) {
    $jsonData["properties"] = $model->properties;
}

}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}
if (null !== $model->weight) {
    $jsonData["weight"] = $model->weight;
}
if (null !== $model->length) {
    $jsonData["length"] = $model->length;
}
if (null !== $model->width) {
    $jsonData["width"] = $model->width;
}
if (null !== $model->height) {
    $jsonData["height"] = $model->height;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
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

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
