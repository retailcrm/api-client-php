<?php

function serialize_RetailCrm_Api_Model_Response_Inventories_ProductsResponse(RetailCrm\Api\Model\Response\Inventories\ProductsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->pagination) {
    $jsonData["pagination"] = [];
if (null !== $model->pagination->limit) {
    $jsonData["pagination"]["limit"] = $model->pagination->limit;
}
if (null !== $model->pagination->totalCount) {
    $jsonData["pagination"]["totalCount"] = $model->pagination->totalCount;
}
if (null !== $model->pagination->currentPage) {
    $jsonData["pagination"]["currentPage"] = $model->pagination->currentPage;
}
if (null !== $model->pagination->totalPageCount) {
    $jsonData["pagination"]["totalPageCount"] = $model->pagination->totalPageCount;
}

if (0 === \count($jsonData["pagination"])) {
    $jsonData["pagination"] = $emptyObject;
}

}
if (null !== $model->products) {
    $jsonData["products"] = [];
foreach (array_keys($model->products) as $index12) {
    $jsonData["products"][$index12] = [];
if (null !== $model->products[$index12]->minPrice) {
    $jsonData["products"][$index12]["minPrice"] = $model->products[$index12]->minPrice;
}
if (null !== $model->products[$index12]->maxPrice) {
    $jsonData["products"][$index12]["maxPrice"] = $model->products[$index12]->maxPrice;
}
if (null !== $model->products[$index12]->id) {
    $jsonData["products"][$index12]["id"] = $model->products[$index12]->id;
}
if (null !== $model->products[$index12]->article) {
    $jsonData["products"][$index12]["article"] = $model->products[$index12]->article;
}
if (null !== $model->products[$index12]->name) {
    $jsonData["products"][$index12]["name"] = $model->products[$index12]->name;
}
if (null !== $model->products[$index12]->url) {
    $jsonData["products"][$index12]["url"] = $model->products[$index12]->url;
}
if (null !== $model->products[$index12]->imageUrl) {
    $jsonData["products"][$index12]["imageUrl"] = $model->products[$index12]->imageUrl;
}
if (null !== $model->products[$index12]->description) {
    $jsonData["products"][$index12]["description"] = $model->products[$index12]->description;
}
if (null !== $model->products[$index12]->popular) {
    $jsonData["products"][$index12]["popular"] = $model->products[$index12]->popular;
}
if (null !== $model->products[$index12]->stock) {
    $jsonData["products"][$index12]["stock"] = $model->products[$index12]->stock;
}
if (null !== $model->products[$index12]->novelty) {
    $jsonData["products"][$index12]["novelty"] = $model->products[$index12]->novelty;
}
if (null !== $model->products[$index12]->recommended) {
    $jsonData["products"][$index12]["recommended"] = $model->products[$index12]->recommended;
}
if (null !== $model->products[$index12]->properties) {
    $jsonData["products"][$index12]["properties"] = [];
foreach (array_keys($model->products[$index12]->properties) as $index36) {
    $jsonData["products"][$index12]["properties"] = $model->products[$index12]->properties;
}

}
if (null !== $model->products[$index12]->groups) {
    $jsonData["products"][$index12]["groups"] = [];
foreach (array_keys($model->products[$index12]->groups) as $index32) {
    $jsonData["products"][$index12]["groups"][$index32] = [];
if (null !== $model->products[$index12]->groups[$index32]->id) {
    $jsonData["products"][$index12]["groups"][$index32]["id"] = $model->products[$index12]->groups[$index32]->id;
}
if (null !== $model->products[$index12]->groups[$index32]->externalId) {
    $jsonData["products"][$index12]["groups"][$index32]["externalId"] = $model->products[$index12]->groups[$index32]->externalId;
}

if (0 === \count($jsonData["products"][$index12]["groups"][$index32])) {
    $jsonData["products"][$index12]["groups"][$index32] = $emptyObject;
}

}

}
if (null !== $model->products[$index12]->externalId) {
    $jsonData["products"][$index12]["externalId"] = $model->products[$index12]->externalId;
}
if (null !== $model->products[$index12]->manufacturer) {
    $jsonData["products"][$index12]["manufacturer"] = $model->products[$index12]->manufacturer;
}
if (null !== $model->products[$index12]->offers) {
    $jsonData["products"][$index12]["offers"] = [];
foreach (array_keys($model->products[$index12]->offers) as $index32) {
    $jsonData["products"][$index12]["offers"][$index32] = [];
if (null !== $model->products[$index12]->offers[$index32]->name) {
    $jsonData["products"][$index12]["offers"][$index32]["name"] = $model->products[$index12]->offers[$index32]->name;
}
if (null !== $model->products[$index12]->offers[$index32]->price) {
    $jsonData["products"][$index12]["offers"][$index32]["price"] = $model->products[$index12]->offers[$index32]->price;
}
if (null !== $model->products[$index12]->offers[$index32]->images) {
    $jsonData["products"][$index12]["offers"][$index32]["images"] = $model->products[$index12]->offers[$index32]->images;
}
if (null !== $model->products[$index12]->offers[$index32]->id) {
    $jsonData["products"][$index12]["offers"][$index32]["id"] = $model->products[$index12]->offers[$index32]->id;
}
if (null !== $model->products[$index12]->offers[$index32]->externalId) {
    $jsonData["products"][$index12]["offers"][$index32]["externalId"] = $model->products[$index12]->offers[$index32]->externalId;
}
if (null !== $model->products[$index12]->offers[$index32]->xmlId) {
    $jsonData["products"][$index12]["offers"][$index32]["xmlId"] = $model->products[$index12]->offers[$index32]->xmlId;
}
if (null !== $model->products[$index12]->offers[$index32]->article) {
    $jsonData["products"][$index12]["offers"][$index32]["article"] = $model->products[$index12]->offers[$index32]->article;
}
if (null !== $model->products[$index12]->offers[$index32]->prices) {
    $jsonData["products"][$index12]["offers"][$index32]["prices"] = [];
foreach (array_keys($model->products[$index12]->offers[$index32]->prices) as $index52) {
    $jsonData["products"][$index12]["offers"][$index32]["prices"][$index52] = [];
if (null !== $model->products[$index12]->offers[$index32]->prices[$index52]->priceType) {
    $jsonData["products"][$index12]["offers"][$index32]["prices"][$index52]["priceType"] = $model->products[$index12]->offers[$index32]->prices[$index52]->priceType;
}
if (null !== $model->products[$index12]->offers[$index32]->prices[$index52]->price) {
    $jsonData["products"][$index12]["offers"][$index32]["prices"][$index52]["price"] = $model->products[$index12]->offers[$index32]->prices[$index52]->price;
}
if (null !== $model->products[$index12]->offers[$index32]->prices[$index52]->ordering) {
    $jsonData["products"][$index12]["offers"][$index32]["prices"][$index52]["ordering"] = $model->products[$index12]->offers[$index32]->prices[$index52]->ordering;
}

if (0 === \count($jsonData["products"][$index12]["offers"][$index32]["prices"][$index52])) {
    $jsonData["products"][$index12]["offers"][$index32]["prices"][$index52] = $emptyObject;
}

}

}
if (null !== $model->products[$index12]->offers[$index32]->purchasePrice) {
    $jsonData["products"][$index12]["offers"][$index32]["purchasePrice"] = $model->products[$index12]->offers[$index32]->purchasePrice;
}
if (null !== $model->products[$index12]->offers[$index32]->vatRate) {
    $jsonData["products"][$index12]["offers"][$index32]["vatRate"] = $model->products[$index12]->offers[$index32]->vatRate;
}
if (null !== $model->products[$index12]->offers[$index32]->properties) {
    $jsonData["products"][$index12]["offers"][$index32]["properties"] = [];
foreach (array_keys($model->products[$index12]->offers[$index32]->properties) as $index56) {
    $jsonData["products"][$index12]["offers"][$index32]["properties"] = $model->products[$index12]->offers[$index32]->properties;
}

}
if (null !== $model->products[$index12]->offers[$index32]->quantity) {
    $jsonData["products"][$index12]["offers"][$index32]["quantity"] = $model->products[$index12]->offers[$index32]->quantity;
}
if (null !== $model->products[$index12]->offers[$index32]->weight) {
    $jsonData["products"][$index12]["offers"][$index32]["weight"] = $model->products[$index12]->offers[$index32]->weight;
}
if (null !== $model->products[$index12]->offers[$index32]->length) {
    $jsonData["products"][$index12]["offers"][$index32]["length"] = $model->products[$index12]->offers[$index32]->length;
}
if (null !== $model->products[$index12]->offers[$index32]->width) {
    $jsonData["products"][$index12]["offers"][$index32]["width"] = $model->products[$index12]->offers[$index32]->width;
}
if (null !== $model->products[$index12]->offers[$index32]->height) {
    $jsonData["products"][$index12]["offers"][$index32]["height"] = $model->products[$index12]->offers[$index32]->height;
}
if (null !== $model->products[$index12]->offers[$index32]->active) {
    $jsonData["products"][$index12]["offers"][$index32]["active"] = $model->products[$index12]->offers[$index32]->active;
}
if (null !== $model->products[$index12]->offers[$index32]->unit) {
    $jsonData["products"][$index12]["offers"][$index32]["unit"] = [];
if (null !== $model->products[$index12]->offers[$index32]->unit->code) {
    $jsonData["products"][$index12]["offers"][$index32]["unit"]["code"] = $model->products[$index12]->offers[$index32]->unit->code;
}
if (null !== $model->products[$index12]->offers[$index32]->unit->name) {
    $jsonData["products"][$index12]["offers"][$index32]["unit"]["name"] = $model->products[$index12]->offers[$index32]->unit->name;
}
if (null !== $model->products[$index12]->offers[$index32]->unit->sym) {
    $jsonData["products"][$index12]["offers"][$index32]["unit"]["sym"] = $model->products[$index12]->offers[$index32]->unit->sym;
}

if (0 === \count($jsonData["products"][$index12]["offers"][$index32]["unit"])) {
    $jsonData["products"][$index12]["offers"][$index32]["unit"] = $emptyObject;
}

}
if (null !== $model->products[$index12]->offers[$index32]->barcode) {
    $jsonData["products"][$index12]["offers"][$index32]["barcode"] = $model->products[$index12]->offers[$index32]->barcode;
}

if (0 === \count($jsonData["products"][$index12]["offers"][$index32])) {
    $jsonData["products"][$index12]["offers"][$index32] = $emptyObject;
}

}

}
if (null !== $model->products[$index12]->active) {
    $jsonData["products"][$index12]["active"] = $model->products[$index12]->active;
}
if (null !== $model->products[$index12]->quantity) {
    $jsonData["products"][$index12]["quantity"] = $model->products[$index12]->quantity;
}
if (null !== $model->products[$index12]->markable) {
    $jsonData["products"][$index12]["markable"] = $model->products[$index12]->markable;
}

if (0 === \count($jsonData["products"][$index12])) {
    $jsonData["products"][$index12] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
