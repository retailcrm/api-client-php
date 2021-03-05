<?php

function serialize_RetailCrm_Api_Model_Entity_Store_Product(RetailCrm\Api\Model\Entity\Store\Product $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->minPrice) {
    $jsonData["minPrice"] = $model->minPrice;
}
if (null !== $model->maxPrice) {
    $jsonData["maxPrice"] = $model->maxPrice;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->article) {
    $jsonData["article"] = $model->article;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->url) {
    $jsonData["url"] = $model->url;
}
if (null !== $model->imageUrl) {
    $jsonData["imageUrl"] = $model->imageUrl;
}
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}
if (null !== $model->popular) {
    $jsonData["popular"] = $model->popular;
}
if (null !== $model->stock) {
    $jsonData["stock"] = $model->stock;
}
if (null !== $model->novelty) {
    $jsonData["novelty"] = $model->novelty;
}
if (null !== $model->recommended) {
    $jsonData["recommended"] = $model->recommended;
}
if (null !== $model->properties) {
    $jsonData["properties"] = [];
foreach (array_keys($model->properties) as $index14) {
    $jsonData["properties"] = $model->properties;
}

}
if (null !== $model->groups) {
    $jsonData["groups"] = [];
foreach (array_keys($model->groups) as $index10) {
    $jsonData["groups"][$index10] = [];
if (null !== $model->groups[$index10]->id) {
    $jsonData["groups"][$index10]["id"] = $model->groups[$index10]->id;
}
if (null !== $model->groups[$index10]->externalId) {
    $jsonData["groups"][$index10]["externalId"] = $model->groups[$index10]->externalId;
}

if (0 === \count($jsonData["groups"][$index10])) {
    $jsonData["groups"][$index10] = $emptyObject;
}

}

}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->manufacturer) {
    $jsonData["manufacturer"] = $model->manufacturer;
}
if (null !== $model->offers) {
    $jsonData["offers"] = [];
foreach (array_keys($model->offers) as $index10) {
    $jsonData["offers"][$index10] = [];
if (null !== $model->offers[$index10]->name) {
    $jsonData["offers"][$index10]["name"] = $model->offers[$index10]->name;
}
if (null !== $model->offers[$index10]->price) {
    $jsonData["offers"][$index10]["price"] = $model->offers[$index10]->price;
}
if (null !== $model->offers[$index10]->images) {
    $jsonData["offers"][$index10]["images"] = $model->offers[$index10]->images;
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
if (null !== $model->offers[$index10]->article) {
    $jsonData["offers"][$index10]["article"] = $model->offers[$index10]->article;
}
if (null !== $model->offers[$index10]->prices) {
    $jsonData["offers"][$index10]["prices"] = [];
foreach (array_keys($model->offers[$index10]->prices) as $index30) {
    $jsonData["offers"][$index10]["prices"][$index30] = [];
if (null !== $model->offers[$index10]->prices[$index30]->priceType) {
    $jsonData["offers"][$index10]["prices"][$index30]["priceType"] = $model->offers[$index10]->prices[$index30]->priceType;
}
if (null !== $model->offers[$index10]->prices[$index30]->price) {
    $jsonData["offers"][$index10]["prices"][$index30]["price"] = $model->offers[$index10]->prices[$index30]->price;
}
if (null !== $model->offers[$index10]->prices[$index30]->ordering) {
    $jsonData["offers"][$index10]["prices"][$index30]["ordering"] = $model->offers[$index10]->prices[$index30]->ordering;
}

if (0 === \count($jsonData["offers"][$index10]["prices"][$index30])) {
    $jsonData["offers"][$index10]["prices"][$index30] = $emptyObject;
}

}

}
if (null !== $model->offers[$index10]->purchasePrice) {
    $jsonData["offers"][$index10]["purchasePrice"] = $model->offers[$index10]->purchasePrice;
}
if (null !== $model->offers[$index10]->vatRate) {
    $jsonData["offers"][$index10]["vatRate"] = $model->offers[$index10]->vatRate;
}
if (null !== $model->offers[$index10]->properties) {
    $jsonData["offers"][$index10]["properties"] = [];
foreach (array_keys($model->offers[$index10]->properties) as $index34) {
    $jsonData["offers"][$index10]["properties"] = $model->offers[$index10]->properties;
}

}
if (null !== $model->offers[$index10]->quantity) {
    $jsonData["offers"][$index10]["quantity"] = $model->offers[$index10]->quantity;
}
if (null !== $model->offers[$index10]->weight) {
    $jsonData["offers"][$index10]["weight"] = $model->offers[$index10]->weight;
}
if (null !== $model->offers[$index10]->length) {
    $jsonData["offers"][$index10]["length"] = $model->offers[$index10]->length;
}
if (null !== $model->offers[$index10]->width) {
    $jsonData["offers"][$index10]["width"] = $model->offers[$index10]->width;
}
if (null !== $model->offers[$index10]->height) {
    $jsonData["offers"][$index10]["height"] = $model->offers[$index10]->height;
}
if (null !== $model->offers[$index10]->active) {
    $jsonData["offers"][$index10]["active"] = $model->offers[$index10]->active;
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

if (0 === \count($jsonData["offers"][$index10])) {
    $jsonData["offers"][$index10] = $emptyObject;
}

}

}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}
if (null !== $model->markable) {
    $jsonData["markable"] = $model->markable;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
