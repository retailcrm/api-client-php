<?php

function serialize_RetailCrm_Api_Model_Response_Packs_PacksHistoryResponse(RetailCrm\Api\Model\Response\Packs\PacksHistoryResponse $model, bool $useStdClass = true)
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
if (null !== $model->generatedAt) {
    $jsonData["generatedAt"] = $model->generatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history) {
    $jsonData["history"] = [];
foreach (array_keys($model->history) as $index11) {
    $jsonData["history"][$index11] = [];
if (null !== $model->history[$index11]->id) {
    $jsonData["history"][$index11]["id"] = $model->history[$index11]->id;
}
if (null !== $model->history[$index11]->createdAt) {
    $jsonData["history"][$index11]["createdAt"] = $model->history[$index11]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->created) {
    $jsonData["history"][$index11]["created"] = $model->history[$index11]->created;
}
if (null !== $model->history[$index11]->deleted) {
    $jsonData["history"][$index11]["deleted"] = $model->history[$index11]->deleted;
}
if (null !== $model->history[$index11]->field) {
    $jsonData["history"][$index11]["field"] = $model->history[$index11]->field;
}
if (null !== $model->history[$index11]->oldValue) {
    $jsonData["history"][$index11]["oldValue"] = $model->history[$index11]->oldValue;
}
if (null !== $model->history[$index11]->newValue) {
    $jsonData["history"][$index11]["newValue"] = $model->history[$index11]->newValue;
}
if (null !== $model->history[$index11]->pack) {
    $jsonData["history"][$index11]["pack"] = [];
if (null !== $model->history[$index11]->pack->id) {
    $jsonData["history"][$index11]["pack"]["id"] = $model->history[$index11]->pack->id;
}
if (null !== $model->history[$index11]->pack->purchasePrice) {
    $jsonData["history"][$index11]["pack"]["purchasePrice"] = $model->history[$index11]->pack->purchasePrice;
}
if (null !== $model->history[$index11]->pack->quantity) {
    $jsonData["history"][$index11]["pack"]["quantity"] = $model->history[$index11]->pack->quantity;
}
if (null !== $model->history[$index11]->pack->unit) {
    $jsonData["history"][$index11]["pack"]["unit"] = [];
if (null !== $model->history[$index11]->pack->unit->code) {
    $jsonData["history"][$index11]["pack"]["unit"]["code"] = $model->history[$index11]->pack->unit->code;
}
if (null !== $model->history[$index11]->pack->unit->name) {
    $jsonData["history"][$index11]["pack"]["unit"]["name"] = $model->history[$index11]->pack->unit->name;
}
if (null !== $model->history[$index11]->pack->unit->sym) {
    $jsonData["history"][$index11]["pack"]["unit"]["sym"] = $model->history[$index11]->pack->unit->sym;
}

if (0 === \count($jsonData["history"][$index11]["pack"]["unit"])) {
    $jsonData["history"][$index11]["pack"]["unit"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->pack->store) {
    $jsonData["history"][$index11]["pack"]["store"] = $model->history[$index11]->pack->store;
}
if (null !== $model->history[$index11]->pack->item) {
    $jsonData["history"][$index11]["pack"]["item"] = [];
if (null !== $model->history[$index11]->pack->item->externalId) {
    $jsonData["history"][$index11]["pack"]["item"]["externalId"] = $model->history[$index11]->pack->item->externalId;
}
if (null !== $model->history[$index11]->pack->item->markingCodes) {
    $jsonData["history"][$index11]["pack"]["item"]["markingCodes"] = [];
foreach (array_keys($model->history[$index11]->pack->item->markingCodes) as $index53) {
    $jsonData["history"][$index11]["pack"]["item"]["markingCodes"] = $model->history[$index11]->pack->item->markingCodes;
}

}
if (null !== $model->history[$index11]->pack->item->id) {
    $jsonData["history"][$index11]["pack"]["item"]["id"] = $model->history[$index11]->pack->item->id;
}
if (null !== $model->history[$index11]->pack->item->externalIds) {
    $jsonData["history"][$index11]["pack"]["item"]["externalIds"] = [];
foreach (array_keys($model->history[$index11]->pack->item->externalIds) as $index52) {
    $jsonData["history"][$index11]["pack"]["item"]["externalIds"][$index52] = [];
if (null !== $model->history[$index11]->pack->item->externalIds[$index52]->code) {
    $jsonData["history"][$index11]["pack"]["item"]["externalIds"][$index52]["code"] = $model->history[$index11]->pack->item->externalIds[$index52]->code;
}
if (null !== $model->history[$index11]->pack->item->externalIds[$index52]->value) {
    $jsonData["history"][$index11]["pack"]["item"]["externalIds"][$index52]["value"] = $model->history[$index11]->pack->item->externalIds[$index52]->value;
}

if (0 === \count($jsonData["history"][$index11]["pack"]["item"]["externalIds"][$index52])) {
    $jsonData["history"][$index11]["pack"]["item"]["externalIds"][$index52] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->pack->item->priceType) {
    $jsonData["history"][$index11]["pack"]["item"]["priceType"] = [];
if (null !== $model->history[$index11]->pack->item->priceType->code) {
    $jsonData["history"][$index11]["pack"]["item"]["priceType"]["code"] = $model->history[$index11]->pack->item->priceType->code;
}

if (0 === \count($jsonData["history"][$index11]["pack"]["item"]["priceType"])) {
    $jsonData["history"][$index11]["pack"]["item"]["priceType"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->pack->item->initialPrice) {
    $jsonData["history"][$index11]["pack"]["item"]["initialPrice"] = $model->history[$index11]->pack->item->initialPrice;
}
if (null !== $model->history[$index11]->pack->item->discountManualAmount) {
    $jsonData["history"][$index11]["pack"]["item"]["discountManualAmount"] = $model->history[$index11]->pack->item->discountManualAmount;
}
if (null !== $model->history[$index11]->pack->item->discountManualPercent) {
    $jsonData["history"][$index11]["pack"]["item"]["discountManualPercent"] = $model->history[$index11]->pack->item->discountManualPercent;
}
if (null !== $model->history[$index11]->pack->item->discountTotal) {
    $jsonData["history"][$index11]["pack"]["item"]["discountTotal"] = $model->history[$index11]->pack->item->discountTotal;
}
if (null !== $model->history[$index11]->pack->item->prices) {
    $jsonData["history"][$index11]["pack"]["item"]["prices"] = [];
foreach (array_keys($model->history[$index11]->pack->item->prices) as $index47) {
    $jsonData["history"][$index11]["pack"]["item"]["prices"][$index47] = [];
if (null !== $model->history[$index11]->pack->item->prices[$index47]->price) {
    $jsonData["history"][$index11]["pack"]["item"]["prices"][$index47]["price"] = $model->history[$index11]->pack->item->prices[$index47]->price;
}
if (null !== $model->history[$index11]->pack->item->prices[$index47]->quantity) {
    $jsonData["history"][$index11]["pack"]["item"]["prices"][$index47]["quantity"] = $model->history[$index11]->pack->item->prices[$index47]->quantity;
}

if (0 === \count($jsonData["history"][$index11]["pack"]["item"]["prices"][$index47])) {
    $jsonData["history"][$index11]["pack"]["item"]["prices"][$index47] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->pack->item->vatRate) {
    $jsonData["history"][$index11]["pack"]["item"]["vatRate"] = $model->history[$index11]->pack->item->vatRate;
}
if (null !== $model->history[$index11]->pack->item->createdAt) {
    $jsonData["history"][$index11]["pack"]["item"]["createdAt"] = $model->history[$index11]->pack->item->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->pack->item->quantity) {
    $jsonData["history"][$index11]["pack"]["item"]["quantity"] = $model->history[$index11]->pack->item->quantity;
}
if (null !== $model->history[$index11]->pack->item->status) {
    $jsonData["history"][$index11]["pack"]["item"]["status"] = $model->history[$index11]->pack->item->status;
}
if (null !== $model->history[$index11]->pack->item->comment) {
    $jsonData["history"][$index11]["pack"]["item"]["comment"] = $model->history[$index11]->pack->item->comment;
}
if (null !== $model->history[$index11]->pack->item->offer) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"] = [];
if (null !== $model->history[$index11]->pack->item->offer->displayName) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["displayName"] = $model->history[$index11]->pack->item->offer->displayName;
}
if (null !== $model->history[$index11]->pack->item->offer->id) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["id"] = $model->history[$index11]->pack->item->offer->id;
}
if (null !== $model->history[$index11]->pack->item->offer->externalId) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["externalId"] = $model->history[$index11]->pack->item->offer->externalId;
}
if (null !== $model->history[$index11]->pack->item->offer->xmlId) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["xmlId"] = $model->history[$index11]->pack->item->offer->xmlId;
}
if (null !== $model->history[$index11]->pack->item->offer->name) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["name"] = $model->history[$index11]->pack->item->offer->name;
}
if (null !== $model->history[$index11]->pack->item->offer->article) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["article"] = $model->history[$index11]->pack->item->offer->article;
}
if (null !== $model->history[$index11]->pack->item->offer->vatRate) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["vatRate"] = $model->history[$index11]->pack->item->offer->vatRate;
}
if (null !== $model->history[$index11]->pack->item->offer->unit) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["unit"] = [];
if (null !== $model->history[$index11]->pack->item->offer->unit->code) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["unit"]["code"] = $model->history[$index11]->pack->item->offer->unit->code;
}
if (null !== $model->history[$index11]->pack->item->offer->unit->name) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["unit"]["name"] = $model->history[$index11]->pack->item->offer->unit->name;
}
if (null !== $model->history[$index11]->pack->item->offer->unit->sym) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["unit"]["sym"] = $model->history[$index11]->pack->item->offer->unit->sym;
}

if (0 === \count($jsonData["history"][$index11]["pack"]["item"]["offer"]["unit"])) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->pack->item->offer->barcode) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["barcode"] = $model->history[$index11]->pack->item->offer->barcode;
}
if (null !== $model->history[$index11]->pack->item->offer->properties) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["properties"] = [];
foreach (array_keys($model->history[$index11]->pack->item->offer->properties) as $index60) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"]["properties"] = $model->history[$index11]->pack->item->offer->properties;
}

}

if (0 === \count($jsonData["history"][$index11]["pack"]["item"]["offer"])) {
    $jsonData["history"][$index11]["pack"]["item"]["offer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->pack->item->order) {
    $jsonData["history"][$index11]["pack"]["item"]["order"] = [];
if (null !== $model->history[$index11]->pack->item->order->id) {
    $jsonData["history"][$index11]["pack"]["item"]["order"]["id"] = $model->history[$index11]->pack->item->order->id;
}

if (0 === \count($jsonData["history"][$index11]["pack"]["item"]["order"])) {
    $jsonData["history"][$index11]["pack"]["item"]["order"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->pack->item->productName) {
    $jsonData["history"][$index11]["pack"]["item"]["productName"] = $model->history[$index11]->pack->item->productName;
}
if (null !== $model->history[$index11]->pack->item->isCanceled) {
    $jsonData["history"][$index11]["pack"]["item"]["isCanceled"] = $model->history[$index11]->pack->item->isCanceled;
}
if (null !== $model->history[$index11]->pack->item->properties) {
    if (0 === \count($model->history[$index11]->pack->item->properties)) {
    $jsonData["history"][$index11]["pack"]["item"]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->history[$index11]->pack->item->properties) as $index51) {
        $jsonData["history"][$index11]["pack"]["item"]["properties"][$index51] = [];
if (null !== $model->history[$index11]->pack->item->properties[$index51]->code) {
    $jsonData["history"][$index11]["pack"]["item"]["properties"][$index51]["code"] = $model->history[$index11]->pack->item->properties[$index51]->code;
}
if (null !== $model->history[$index11]->pack->item->properties[$index51]->name) {
    $jsonData["history"][$index11]["pack"]["item"]["properties"][$index51]["name"] = $model->history[$index11]->pack->item->properties[$index51]->name;
}
if (null !== $model->history[$index11]->pack->item->properties[$index51]->value) {
    $jsonData["history"][$index11]["pack"]["item"]["properties"][$index51]["value"] = $model->history[$index11]->pack->item->properties[$index51]->value;
}

if (0 === \count($jsonData["history"][$index11]["pack"]["item"]["properties"][$index51])) {
    $jsonData["history"][$index11]["pack"]["item"]["properties"][$index51] = $emptyObject;
}

    }
}

}
if (null !== $model->history[$index11]->pack->item->purchasePrice) {
    $jsonData["history"][$index11]["pack"]["item"]["purchasePrice"] = $model->history[$index11]->pack->item->purchasePrice;
}

if (0 === \count($jsonData["history"][$index11]["pack"]["item"])) {
    $jsonData["history"][$index11]["pack"]["item"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->pack->itemId) {
    $jsonData["history"][$index11]["pack"]["itemId"] = $model->history[$index11]->pack->itemId;
}
if (null !== $model->history[$index11]->pack->shipmentDate) {
    $jsonData["history"][$index11]["pack"]["shipmentDate"] = $model->history[$index11]->pack->shipmentDate->format('Y-m-d');;
}
if (null !== $model->history[$index11]->pack->invoiceNumber) {
    $jsonData["history"][$index11]["pack"]["invoiceNumber"] = $model->history[$index11]->pack->invoiceNumber;
}
if (null !== $model->history[$index11]->pack->deliveryNoteNumber) {
    $jsonData["history"][$index11]["pack"]["deliveryNoteNumber"] = $model->history[$index11]->pack->deliveryNoteNumber;
}

if (0 === \count($jsonData["history"][$index11]["pack"])) {
    $jsonData["history"][$index11]["pack"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->source) {
    $jsonData["history"][$index11]["source"] = $model->history[$index11]->source;
}
if (null !== $model->history[$index11]->user) {
    $jsonData["history"][$index11]["user"] = [];
if (null !== $model->history[$index11]->user->id) {
    $jsonData["history"][$index11]["user"]["id"] = $model->history[$index11]->user->id;
}

if (0 === \count($jsonData["history"][$index11]["user"])) {
    $jsonData["history"][$index11]["user"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11])) {
    $jsonData["history"][$index11] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
