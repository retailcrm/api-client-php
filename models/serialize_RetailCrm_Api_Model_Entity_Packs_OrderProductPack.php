<?php

function serialize_RetailCrm_Api_Model_Entity_Packs_OrderProductPack(RetailCrm\Api\Model\Entity\Packs\OrderProductPack $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->purchasePrice) {
    $jsonData["purchasePrice"] = $model->purchasePrice;
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
if (null !== $model->store) {
    $jsonData["store"] = $model->store;
}
if (null !== $model->item) {
    $jsonData["item"] = [];
if (null !== $model->item->externalId) {
    $jsonData["item"]["externalId"] = $model->item->externalId;
}
if (null !== $model->item->markingCodes) {
    $jsonData["item"]["markingCodes"] = [];
foreach (array_keys($model->item->markingCodes) as $index24) {
    $jsonData["item"]["markingCodes"] = $model->item->markingCodes;
}

}
if (null !== $model->item->id) {
    $jsonData["item"]["id"] = $model->item->id;
}
if (null !== $model->item->externalIds) {
    $jsonData["item"]["externalIds"] = [];
foreach (array_keys($model->item->externalIds) as $index23) {
    $jsonData["item"]["externalIds"][$index23] = [];
if (null !== $model->item->externalIds[$index23]->code) {
    $jsonData["item"]["externalIds"][$index23]["code"] = $model->item->externalIds[$index23]->code;
}
if (null !== $model->item->externalIds[$index23]->value) {
    $jsonData["item"]["externalIds"][$index23]["value"] = $model->item->externalIds[$index23]->value;
}

if (0 === \count($jsonData["item"]["externalIds"][$index23])) {
    $jsonData["item"]["externalIds"][$index23] = $emptyObject;
}

}

}
if (null !== $model->item->priceType) {
    $jsonData["item"]["priceType"] = [];
if (null !== $model->item->priceType->code) {
    $jsonData["item"]["priceType"]["code"] = $model->item->priceType->code;
}

if (0 === \count($jsonData["item"]["priceType"])) {
    $jsonData["item"]["priceType"] = $emptyObject;
}

}
if (null !== $model->item->initialPrice) {
    $jsonData["item"]["initialPrice"] = $model->item->initialPrice;
}
if (null !== $model->item->discountManualAmount) {
    $jsonData["item"]["discountManualAmount"] = $model->item->discountManualAmount;
}
if (null !== $model->item->discountManualPercent) {
    $jsonData["item"]["discountManualPercent"] = $model->item->discountManualPercent;
}
if (null !== $model->item->discountTotal) {
    $jsonData["item"]["discountTotal"] = $model->item->discountTotal;
}
if (null !== $model->item->prices) {
    $jsonData["item"]["prices"] = [];
foreach (array_keys($model->item->prices) as $index18) {
    $jsonData["item"]["prices"][$index18] = [];
if (null !== $model->item->prices[$index18]->price) {
    $jsonData["item"]["prices"][$index18]["price"] = $model->item->prices[$index18]->price;
}
if (null !== $model->item->prices[$index18]->quantity) {
    $jsonData["item"]["prices"][$index18]["quantity"] = $model->item->prices[$index18]->quantity;
}

if (0 === \count($jsonData["item"]["prices"][$index18])) {
    $jsonData["item"]["prices"][$index18] = $emptyObject;
}

}

}
if (null !== $model->item->vatRate) {
    $jsonData["item"]["vatRate"] = $model->item->vatRate;
}
if (null !== $model->item->createdAt) {
    $jsonData["item"]["createdAt"] = $model->item->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->item->quantity) {
    $jsonData["item"]["quantity"] = $model->item->quantity;
}
if (null !== $model->item->status) {
    $jsonData["item"]["status"] = $model->item->status;
}
if (null !== $model->item->comment) {
    $jsonData["item"]["comment"] = $model->item->comment;
}
if (null !== $model->item->offer) {
    $jsonData["item"]["offer"] = [];
if (null !== $model->item->offer->displayName) {
    $jsonData["item"]["offer"]["displayName"] = $model->item->offer->displayName;
}
if (null !== $model->item->offer->id) {
    $jsonData["item"]["offer"]["id"] = $model->item->offer->id;
}
if (null !== $model->item->offer->externalId) {
    $jsonData["item"]["offer"]["externalId"] = $model->item->offer->externalId;
}
if (null !== $model->item->offer->xmlId) {
    $jsonData["item"]["offer"]["xmlId"] = $model->item->offer->xmlId;
}
if (null !== $model->item->offer->name) {
    $jsonData["item"]["offer"]["name"] = $model->item->offer->name;
}
if (null !== $model->item->offer->article) {
    $jsonData["item"]["offer"]["article"] = $model->item->offer->article;
}
if (null !== $model->item->offer->vatRate) {
    $jsonData["item"]["offer"]["vatRate"] = $model->item->offer->vatRate;
}
if (null !== $model->item->offer->unit) {
    $jsonData["item"]["offer"]["unit"] = [];
if (null !== $model->item->offer->unit->code) {
    $jsonData["item"]["offer"]["unit"]["code"] = $model->item->offer->unit->code;
}
if (null !== $model->item->offer->unit->name) {
    $jsonData["item"]["offer"]["unit"]["name"] = $model->item->offer->unit->name;
}
if (null !== $model->item->offer->unit->sym) {
    $jsonData["item"]["offer"]["unit"]["sym"] = $model->item->offer->unit->sym;
}

if (0 === \count($jsonData["item"]["offer"]["unit"])) {
    $jsonData["item"]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->item->offer->barcode) {
    $jsonData["item"]["offer"]["barcode"] = $model->item->offer->barcode;
}
if (null !== $model->item->offer->properties) {
    $jsonData["item"]["offer"]["properties"] = [];
foreach (array_keys($model->item->offer->properties) as $index31) {
    $jsonData["item"]["offer"]["properties"] = $model->item->offer->properties;
}

}

if (0 === \count($jsonData["item"]["offer"])) {
    $jsonData["item"]["offer"] = $emptyObject;
}

}
if (null !== $model->item->order) {
    $jsonData["item"]["order"] = [];
if (null !== $model->item->order->id) {
    $jsonData["item"]["order"]["id"] = $model->item->order->id;
}

if (0 === \count($jsonData["item"]["order"])) {
    $jsonData["item"]["order"] = $emptyObject;
}

}
if (null !== $model->item->productName) {
    $jsonData["item"]["productName"] = $model->item->productName;
}
if (null !== $model->item->isCanceled) {
    $jsonData["item"]["isCanceled"] = $model->item->isCanceled;
}
if (null !== $model->item->properties) {
    if (0 === \count($model->item->properties)) {
    $jsonData["item"]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->item->properties) as $index22) {
        $jsonData["item"]["properties"][$index22] = [];
if (null !== $model->item->properties[$index22]->code) {
    $jsonData["item"]["properties"][$index22]["code"] = $model->item->properties[$index22]->code;
}
if (null !== $model->item->properties[$index22]->name) {
    $jsonData["item"]["properties"][$index22]["name"] = $model->item->properties[$index22]->name;
}
if (null !== $model->item->properties[$index22]->value) {
    $jsonData["item"]["properties"][$index22]["value"] = $model->item->properties[$index22]->value;
}

if (0 === \count($jsonData["item"]["properties"][$index22])) {
    $jsonData["item"]["properties"][$index22] = $emptyObject;
}

    }
}

}
if (null !== $model->item->purchasePrice) {
    $jsonData["item"]["purchasePrice"] = $model->item->purchasePrice;
}

if (0 === \count($jsonData["item"])) {
    $jsonData["item"] = $emptyObject;
}

}
if (null !== $model->itemId) {
    $jsonData["itemId"] = $model->itemId;
}
if (null !== $model->shipmentDate) {
    $jsonData["shipmentDate"] = $model->shipmentDate->format('Y-m-d');;
}
if (null !== $model->invoiceNumber) {
    $jsonData["invoiceNumber"] = $model->invoiceNumber;
}
if (null !== $model->deliveryNoteNumber) {
    $jsonData["deliveryNoteNumber"] = $model->deliveryNoteNumber;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
