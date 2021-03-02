<?php

function serialize_RetailCrm_Api_Model_Entity_Orders_Items_OrderProduct(RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->markingCodes) {
    $jsonData["markingCodes"] = [];
foreach (array_keys($model->markingCodes) as $index16) {
    $jsonData["markingCodes"] = $model->markingCodes;
}

}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalIds) {
    $jsonData["externalIds"] = [];
foreach (array_keys($model->externalIds) as $index15) {
    $jsonData["externalIds"][$index15] = [];
if (null !== $model->externalIds[$index15]->code) {
    $jsonData["externalIds"][$index15]["code"] = $model->externalIds[$index15]->code;
}
if (null !== $model->externalIds[$index15]->value) {
    $jsonData["externalIds"][$index15]["value"] = $model->externalIds[$index15]->value;
}

if (0 === \count($jsonData["externalIds"][$index15])) {
    $jsonData["externalIds"][$index15] = $emptyObject;
}

}

}
if (null !== $model->priceType) {
    $jsonData["priceType"] = [];
if (null !== $model->priceType->code) {
    $jsonData["priceType"]["code"] = $model->priceType->code;
}

if (0 === \count($jsonData["priceType"])) {
    $jsonData["priceType"] = $emptyObject;
}

}
if (null !== $model->initialPrice) {
    $jsonData["initialPrice"] = $model->initialPrice;
}
if (null !== $model->discountManualAmount) {
    $jsonData["discountManualAmount"] = $model->discountManualAmount;
}
if (null !== $model->discountManualPercent) {
    $jsonData["discountManualPercent"] = $model->discountManualPercent;
}
if (null !== $model->discountTotal) {
    $jsonData["discountTotal"] = $model->discountTotal;
}
if (null !== $model->prices) {
    $jsonData["prices"] = [];
foreach (array_keys($model->prices) as $index10) {
    $jsonData["prices"][$index10] = [];
if (null !== $model->prices[$index10]->price) {
    $jsonData["prices"][$index10]["price"] = $model->prices[$index10]->price;
}
if (null !== $model->prices[$index10]->quantity) {
    $jsonData["prices"][$index10]["quantity"] = $model->prices[$index10]->quantity;
}

if (0 === \count($jsonData["prices"][$index10])) {
    $jsonData["prices"][$index10] = $emptyObject;
}

}

}
if (null !== $model->vatRate) {
    $jsonData["vatRate"] = $model->vatRate;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}
if (null !== $model->offer) {
    $jsonData["offer"] = [];
if (null !== $model->offer->displayName) {
    $jsonData["offer"]["displayName"] = $model->offer->displayName;
}
if (null !== $model->offer->id) {
    $jsonData["offer"]["id"] = $model->offer->id;
}
if (null !== $model->offer->externalId) {
    $jsonData["offer"]["externalId"] = $model->offer->externalId;
}
if (null !== $model->offer->xmlId) {
    $jsonData["offer"]["xmlId"] = $model->offer->xmlId;
}
if (null !== $model->offer->name) {
    $jsonData["offer"]["name"] = $model->offer->name;
}
if (null !== $model->offer->article) {
    $jsonData["offer"]["article"] = $model->offer->article;
}
if (null !== $model->offer->vatRate) {
    $jsonData["offer"]["vatRate"] = $model->offer->vatRate;
}
if (null !== $model->offer->unit) {
    $jsonData["offer"]["unit"] = [];
if (null !== $model->offer->unit->code) {
    $jsonData["offer"]["unit"]["code"] = $model->offer->unit->code;
}
if (null !== $model->offer->unit->name) {
    $jsonData["offer"]["unit"]["name"] = $model->offer->unit->name;
}
if (null !== $model->offer->unit->sym) {
    $jsonData["offer"]["unit"]["sym"] = $model->offer->unit->sym;
}

if (0 === \count($jsonData["offer"]["unit"])) {
    $jsonData["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->offer->barcode) {
    $jsonData["offer"]["barcode"] = $model->offer->barcode;
}
if (null !== $model->offer->properties) {
    $jsonData["offer"]["properties"] = [];
foreach (array_keys($model->offer->properties) as $index23) {
    $jsonData["offer"]["properties"] = $model->offer->properties;
}

}

if (0 === \count($jsonData["offer"])) {
    $jsonData["offer"] = $emptyObject;
}

}
if (null !== $model->order) {
    $jsonData["order"] = [];
if (null !== $model->order->id) {
    $jsonData["order"]["id"] = $model->order->id;
}

if (0 === \count($jsonData["order"])) {
    $jsonData["order"] = $emptyObject;
}

}
if (null !== $model->productName) {
    $jsonData["productName"] = $model->productName;
}
if (null !== $model->isCanceled) {
    $jsonData["isCanceled"] = $model->isCanceled;
}
if (null !== $model->properties) {
    if (0 === \count($model->properties)) {
    $jsonData["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->properties) as $index14) {
        $jsonData["properties"][$index14] = [];
if (null !== $model->properties[$index14]->code) {
    $jsonData["properties"][$index14]["code"] = $model->properties[$index14]->code;
}
if (null !== $model->properties[$index14]->name) {
    $jsonData["properties"][$index14]["name"] = $model->properties[$index14]->name;
}
if (null !== $model->properties[$index14]->value) {
    $jsonData["properties"][$index14]["value"] = $model->properties[$index14]->value;
}

if (0 === \count($jsonData["properties"][$index14])) {
    $jsonData["properties"][$index14] = $emptyObject;
}

    }
}

}
if (null !== $model->purchasePrice) {
    $jsonData["purchasePrice"] = $model->purchasePrice;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
