<?php

function serialize_RetailCrm_Api_Model_Response_Packs_PacksResponse(RetailCrm\Api\Model\Response\Packs\PacksResponse $model, bool $useStdClass = true)
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
if (null !== $model->packs) {
    $jsonData["packs"] = [];
foreach (array_keys($model->packs) as $index9) {
    $jsonData["packs"][$index9] = [];
if (null !== $model->packs[$index9]->id) {
    $jsonData["packs"][$index9]["id"] = $model->packs[$index9]->id;
}
if (null !== $model->packs[$index9]->purchasePrice) {
    $jsonData["packs"][$index9]["purchasePrice"] = $model->packs[$index9]->purchasePrice;
}
if (null !== $model->packs[$index9]->quantity) {
    $jsonData["packs"][$index9]["quantity"] = $model->packs[$index9]->quantity;
}
if (null !== $model->packs[$index9]->unit) {
    $jsonData["packs"][$index9]["unit"] = [];
if (null !== $model->packs[$index9]->unit->code) {
    $jsonData["packs"][$index9]["unit"]["code"] = $model->packs[$index9]->unit->code;
}
if (null !== $model->packs[$index9]->unit->name) {
    $jsonData["packs"][$index9]["unit"]["name"] = $model->packs[$index9]->unit->name;
}
if (null !== $model->packs[$index9]->unit->sym) {
    $jsonData["packs"][$index9]["unit"]["sym"] = $model->packs[$index9]->unit->sym;
}

if (0 === \count($jsonData["packs"][$index9]["unit"])) {
    $jsonData["packs"][$index9]["unit"] = $emptyObject;
}

}
if (null !== $model->packs[$index9]->store) {
    $jsonData["packs"][$index9]["store"] = $model->packs[$index9]->store;
}
if (null !== $model->packs[$index9]->item) {
    $jsonData["packs"][$index9]["item"] = [];
if (null !== $model->packs[$index9]->item->externalId) {
    $jsonData["packs"][$index9]["item"]["externalId"] = $model->packs[$index9]->item->externalId;
}
if (null !== $model->packs[$index9]->item->markingCodes) {
    $jsonData["packs"][$index9]["item"]["markingCodes"] = [];
foreach (array_keys($model->packs[$index9]->item->markingCodes) as $index42) {
    $jsonData["packs"][$index9]["item"]["markingCodes"] = $model->packs[$index9]->item->markingCodes;
}

}
if (null !== $model->packs[$index9]->item->id) {
    $jsonData["packs"][$index9]["item"]["id"] = $model->packs[$index9]->item->id;
}
if (null !== $model->packs[$index9]->item->externalIds) {
    $jsonData["packs"][$index9]["item"]["externalIds"] = [];
foreach (array_keys($model->packs[$index9]->item->externalIds) as $index41) {
    $jsonData["packs"][$index9]["item"]["externalIds"][$index41] = [];
if (null !== $model->packs[$index9]->item->externalIds[$index41]->code) {
    $jsonData["packs"][$index9]["item"]["externalIds"][$index41]["code"] = $model->packs[$index9]->item->externalIds[$index41]->code;
}
if (null !== $model->packs[$index9]->item->externalIds[$index41]->value) {
    $jsonData["packs"][$index9]["item"]["externalIds"][$index41]["value"] = $model->packs[$index9]->item->externalIds[$index41]->value;
}

if (0 === \count($jsonData["packs"][$index9]["item"]["externalIds"][$index41])) {
    $jsonData["packs"][$index9]["item"]["externalIds"][$index41] = $emptyObject;
}

}

}
if (null !== $model->packs[$index9]->item->priceType) {
    $jsonData["packs"][$index9]["item"]["priceType"] = [];
if (null !== $model->packs[$index9]->item->priceType->code) {
    $jsonData["packs"][$index9]["item"]["priceType"]["code"] = $model->packs[$index9]->item->priceType->code;
}

if (0 === \count($jsonData["packs"][$index9]["item"]["priceType"])) {
    $jsonData["packs"][$index9]["item"]["priceType"] = $emptyObject;
}

}
if (null !== $model->packs[$index9]->item->initialPrice) {
    $jsonData["packs"][$index9]["item"]["initialPrice"] = $model->packs[$index9]->item->initialPrice;
}
if (null !== $model->packs[$index9]->item->discountManualAmount) {
    $jsonData["packs"][$index9]["item"]["discountManualAmount"] = $model->packs[$index9]->item->discountManualAmount;
}
if (null !== $model->packs[$index9]->item->discountManualPercent) {
    $jsonData["packs"][$index9]["item"]["discountManualPercent"] = $model->packs[$index9]->item->discountManualPercent;
}
if (null !== $model->packs[$index9]->item->discountTotal) {
    $jsonData["packs"][$index9]["item"]["discountTotal"] = $model->packs[$index9]->item->discountTotal;
}
if (null !== $model->packs[$index9]->item->prices) {
    $jsonData["packs"][$index9]["item"]["prices"] = [];
foreach (array_keys($model->packs[$index9]->item->prices) as $index36) {
    $jsonData["packs"][$index9]["item"]["prices"][$index36] = [];
if (null !== $model->packs[$index9]->item->prices[$index36]->price) {
    $jsonData["packs"][$index9]["item"]["prices"][$index36]["price"] = $model->packs[$index9]->item->prices[$index36]->price;
}
if (null !== $model->packs[$index9]->item->prices[$index36]->quantity) {
    $jsonData["packs"][$index9]["item"]["prices"][$index36]["quantity"] = $model->packs[$index9]->item->prices[$index36]->quantity;
}

if (0 === \count($jsonData["packs"][$index9]["item"]["prices"][$index36])) {
    $jsonData["packs"][$index9]["item"]["prices"][$index36] = $emptyObject;
}

}

}
if (null !== $model->packs[$index9]->item->vatRate) {
    $jsonData["packs"][$index9]["item"]["vatRate"] = $model->packs[$index9]->item->vatRate;
}
if (null !== $model->packs[$index9]->item->createdAt) {
    $jsonData["packs"][$index9]["item"]["createdAt"] = $model->packs[$index9]->item->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->packs[$index9]->item->quantity) {
    $jsonData["packs"][$index9]["item"]["quantity"] = $model->packs[$index9]->item->quantity;
}
if (null !== $model->packs[$index9]->item->status) {
    $jsonData["packs"][$index9]["item"]["status"] = $model->packs[$index9]->item->status;
}
if (null !== $model->packs[$index9]->item->comment) {
    $jsonData["packs"][$index9]["item"]["comment"] = $model->packs[$index9]->item->comment;
}
if (null !== $model->packs[$index9]->item->offer) {
    $jsonData["packs"][$index9]["item"]["offer"] = [];
if (null !== $model->packs[$index9]->item->offer->displayName) {
    $jsonData["packs"][$index9]["item"]["offer"]["displayName"] = $model->packs[$index9]->item->offer->displayName;
}
if (null !== $model->packs[$index9]->item->offer->id) {
    $jsonData["packs"][$index9]["item"]["offer"]["id"] = $model->packs[$index9]->item->offer->id;
}
if (null !== $model->packs[$index9]->item->offer->externalId) {
    $jsonData["packs"][$index9]["item"]["offer"]["externalId"] = $model->packs[$index9]->item->offer->externalId;
}
if (null !== $model->packs[$index9]->item->offer->xmlId) {
    $jsonData["packs"][$index9]["item"]["offer"]["xmlId"] = $model->packs[$index9]->item->offer->xmlId;
}
if (null !== $model->packs[$index9]->item->offer->name) {
    $jsonData["packs"][$index9]["item"]["offer"]["name"] = $model->packs[$index9]->item->offer->name;
}
if (null !== $model->packs[$index9]->item->offer->article) {
    $jsonData["packs"][$index9]["item"]["offer"]["article"] = $model->packs[$index9]->item->offer->article;
}
if (null !== $model->packs[$index9]->item->offer->vatRate) {
    $jsonData["packs"][$index9]["item"]["offer"]["vatRate"] = $model->packs[$index9]->item->offer->vatRate;
}
if (null !== $model->packs[$index9]->item->offer->unit) {
    $jsonData["packs"][$index9]["item"]["offer"]["unit"] = [];
if (null !== $model->packs[$index9]->item->offer->unit->code) {
    $jsonData["packs"][$index9]["item"]["offer"]["unit"]["code"] = $model->packs[$index9]->item->offer->unit->code;
}
if (null !== $model->packs[$index9]->item->offer->unit->name) {
    $jsonData["packs"][$index9]["item"]["offer"]["unit"]["name"] = $model->packs[$index9]->item->offer->unit->name;
}
if (null !== $model->packs[$index9]->item->offer->unit->sym) {
    $jsonData["packs"][$index9]["item"]["offer"]["unit"]["sym"] = $model->packs[$index9]->item->offer->unit->sym;
}

if (0 === \count($jsonData["packs"][$index9]["item"]["offer"]["unit"])) {
    $jsonData["packs"][$index9]["item"]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->packs[$index9]->item->offer->barcode) {
    $jsonData["packs"][$index9]["item"]["offer"]["barcode"] = $model->packs[$index9]->item->offer->barcode;
}
if (null !== $model->packs[$index9]->item->offer->properties) {
    $jsonData["packs"][$index9]["item"]["offer"]["properties"] = [];
foreach (array_keys($model->packs[$index9]->item->offer->properties) as $index49) {
    $jsonData["packs"][$index9]["item"]["offer"]["properties"] = $model->packs[$index9]->item->offer->properties;
}

}

if (0 === \count($jsonData["packs"][$index9]["item"]["offer"])) {
    $jsonData["packs"][$index9]["item"]["offer"] = $emptyObject;
}

}
if (null !== $model->packs[$index9]->item->order) {
    $jsonData["packs"][$index9]["item"]["order"] = [];
if (null !== $model->packs[$index9]->item->order->id) {
    $jsonData["packs"][$index9]["item"]["order"]["id"] = $model->packs[$index9]->item->order->id;
}

if (0 === \count($jsonData["packs"][$index9]["item"]["order"])) {
    $jsonData["packs"][$index9]["item"]["order"] = $emptyObject;
}

}
if (null !== $model->packs[$index9]->item->productName) {
    $jsonData["packs"][$index9]["item"]["productName"] = $model->packs[$index9]->item->productName;
}
if (null !== $model->packs[$index9]->item->isCanceled) {
    $jsonData["packs"][$index9]["item"]["isCanceled"] = $model->packs[$index9]->item->isCanceled;
}
if (null !== $model->packs[$index9]->item->properties) {
    if (0 === \count($model->packs[$index9]->item->properties)) {
    $jsonData["packs"][$index9]["item"]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->packs[$index9]->item->properties) as $index40) {
        $jsonData["packs"][$index9]["item"]["properties"][$index40] = [];
if (null !== $model->packs[$index9]->item->properties[$index40]->code) {
    $jsonData["packs"][$index9]["item"]["properties"][$index40]["code"] = $model->packs[$index9]->item->properties[$index40]->code;
}
if (null !== $model->packs[$index9]->item->properties[$index40]->name) {
    $jsonData["packs"][$index9]["item"]["properties"][$index40]["name"] = $model->packs[$index9]->item->properties[$index40]->name;
}
if (null !== $model->packs[$index9]->item->properties[$index40]->value) {
    $jsonData["packs"][$index9]["item"]["properties"][$index40]["value"] = $model->packs[$index9]->item->properties[$index40]->value;
}

if (0 === \count($jsonData["packs"][$index9]["item"]["properties"][$index40])) {
    $jsonData["packs"][$index9]["item"]["properties"][$index40] = $emptyObject;
}

    }
}

}
if (null !== $model->packs[$index9]->item->purchasePrice) {
    $jsonData["packs"][$index9]["item"]["purchasePrice"] = $model->packs[$index9]->item->purchasePrice;
}

if (0 === \count($jsonData["packs"][$index9]["item"])) {
    $jsonData["packs"][$index9]["item"] = $emptyObject;
}

}
if (null !== $model->packs[$index9]->itemId) {
    $jsonData["packs"][$index9]["itemId"] = $model->packs[$index9]->itemId;
}
if (null !== $model->packs[$index9]->shipmentDate) {
    $jsonData["packs"][$index9]["shipmentDate"] = $model->packs[$index9]->shipmentDate->format('Y-m-d');;
}
if (null !== $model->packs[$index9]->invoiceNumber) {
    $jsonData["packs"][$index9]["invoiceNumber"] = $model->packs[$index9]->invoiceNumber;
}
if (null !== $model->packs[$index9]->deliveryNoteNumber) {
    $jsonData["packs"][$index9]["deliveryNoteNumber"] = $model->packs[$index9]->deliveryNoteNumber;
}

if (0 === \count($jsonData["packs"][$index9])) {
    $jsonData["packs"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
