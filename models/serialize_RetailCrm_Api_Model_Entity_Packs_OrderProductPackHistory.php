<?php

function serialize_RetailCrm_Api_Model_Entity_Packs_OrderProductPackHistory(RetailCrm\Api\Model\Entity\Packs\OrderProductPackHistory $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->created) {
    $jsonData["created"] = $model->created;
}
if (null !== $model->deleted) {
    $jsonData["deleted"] = $model->deleted;
}
if (null !== $model->field) {
    $jsonData["field"] = $model->field;
}
if (null !== $model->oldValue) {
    $jsonData["oldValue"] = $model->oldValue;
}
if (null !== $model->newValue) {
    $jsonData["newValue"] = $model->newValue;
}
if (null !== $model->pack) {
    $jsonData["pack"] = [];
if (null !== $model->pack->id) {
    $jsonData["pack"]["id"] = $model->pack->id;
}
if (null !== $model->pack->purchasePrice) {
    $jsonData["pack"]["purchasePrice"] = $model->pack->purchasePrice;
}
if (null !== $model->pack->quantity) {
    $jsonData["pack"]["quantity"] = $model->pack->quantity;
}
if (null !== $model->pack->unit) {
    $jsonData["pack"]["unit"] = [];
if (null !== $model->pack->unit->code) {
    $jsonData["pack"]["unit"]["code"] = $model->pack->unit->code;
}
if (null !== $model->pack->unit->name) {
    $jsonData["pack"]["unit"]["name"] = $model->pack->unit->name;
}
if (null !== $model->pack->unit->sym) {
    $jsonData["pack"]["unit"]["sym"] = $model->pack->unit->sym;
}

if (0 === \count($jsonData["pack"]["unit"])) {
    $jsonData["pack"]["unit"] = $emptyObject;
}

}
if (null !== $model->pack->store) {
    $jsonData["pack"]["store"] = $model->pack->store;
}
if (null !== $model->pack->item) {
    $jsonData["pack"]["item"] = [];
if (null !== $model->pack->item->externalId) {
    $jsonData["pack"]["item"]["externalId"] = $model->pack->item->externalId;
}
if (null !== $model->pack->item->markingCodes) {
    $jsonData["pack"]["item"]["markingCodes"] = [];
foreach (array_keys($model->pack->item->markingCodes) as $index32) {
    $jsonData["pack"]["item"]["markingCodes"] = $model->pack->item->markingCodes;
}

}
if (null !== $model->pack->item->id) {
    $jsonData["pack"]["item"]["id"] = $model->pack->item->id;
}
if (null !== $model->pack->item->externalIds) {
    $jsonData["pack"]["item"]["externalIds"] = [];
foreach (array_keys($model->pack->item->externalIds) as $index31) {
    $jsonData["pack"]["item"]["externalIds"][$index31] = [];
if (null !== $model->pack->item->externalIds[$index31]->code) {
    $jsonData["pack"]["item"]["externalIds"][$index31]["code"] = $model->pack->item->externalIds[$index31]->code;
}
if (null !== $model->pack->item->externalIds[$index31]->value) {
    $jsonData["pack"]["item"]["externalIds"][$index31]["value"] = $model->pack->item->externalIds[$index31]->value;
}

if (0 === \count($jsonData["pack"]["item"]["externalIds"][$index31])) {
    $jsonData["pack"]["item"]["externalIds"][$index31] = $emptyObject;
}

}

}
if (null !== $model->pack->item->priceType) {
    $jsonData["pack"]["item"]["priceType"] = [];
if (null !== $model->pack->item->priceType->code) {
    $jsonData["pack"]["item"]["priceType"]["code"] = $model->pack->item->priceType->code;
}

if (0 === \count($jsonData["pack"]["item"]["priceType"])) {
    $jsonData["pack"]["item"]["priceType"] = $emptyObject;
}

}
if (null !== $model->pack->item->initialPrice) {
    $jsonData["pack"]["item"]["initialPrice"] = $model->pack->item->initialPrice;
}
if (null !== $model->pack->item->discountManualAmount) {
    $jsonData["pack"]["item"]["discountManualAmount"] = $model->pack->item->discountManualAmount;
}
if (null !== $model->pack->item->discountManualPercent) {
    $jsonData["pack"]["item"]["discountManualPercent"] = $model->pack->item->discountManualPercent;
}
if (null !== $model->pack->item->discountTotal) {
    $jsonData["pack"]["item"]["discountTotal"] = $model->pack->item->discountTotal;
}
if (null !== $model->pack->item->prices) {
    $jsonData["pack"]["item"]["prices"] = [];
foreach (array_keys($model->pack->item->prices) as $index26) {
    $jsonData["pack"]["item"]["prices"][$index26] = [];
if (null !== $model->pack->item->prices[$index26]->price) {
    $jsonData["pack"]["item"]["prices"][$index26]["price"] = $model->pack->item->prices[$index26]->price;
}
if (null !== $model->pack->item->prices[$index26]->quantity) {
    $jsonData["pack"]["item"]["prices"][$index26]["quantity"] = $model->pack->item->prices[$index26]->quantity;
}

if (0 === \count($jsonData["pack"]["item"]["prices"][$index26])) {
    $jsonData["pack"]["item"]["prices"][$index26] = $emptyObject;
}

}

}
if (null !== $model->pack->item->vatRate) {
    $jsonData["pack"]["item"]["vatRate"] = $model->pack->item->vatRate;
}
if (null !== $model->pack->item->createdAt) {
    $jsonData["pack"]["item"]["createdAt"] = $model->pack->item->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->pack->item->quantity) {
    $jsonData["pack"]["item"]["quantity"] = $model->pack->item->quantity;
}
if (null !== $model->pack->item->status) {
    $jsonData["pack"]["item"]["status"] = $model->pack->item->status;
}
if (null !== $model->pack->item->comment) {
    $jsonData["pack"]["item"]["comment"] = $model->pack->item->comment;
}
if (null !== $model->pack->item->offer) {
    $jsonData["pack"]["item"]["offer"] = [];
if (null !== $model->pack->item->offer->displayName) {
    $jsonData["pack"]["item"]["offer"]["displayName"] = $model->pack->item->offer->displayName;
}
if (null !== $model->pack->item->offer->id) {
    $jsonData["pack"]["item"]["offer"]["id"] = $model->pack->item->offer->id;
}
if (null !== $model->pack->item->offer->externalId) {
    $jsonData["pack"]["item"]["offer"]["externalId"] = $model->pack->item->offer->externalId;
}
if (null !== $model->pack->item->offer->xmlId) {
    $jsonData["pack"]["item"]["offer"]["xmlId"] = $model->pack->item->offer->xmlId;
}
if (null !== $model->pack->item->offer->name) {
    $jsonData["pack"]["item"]["offer"]["name"] = $model->pack->item->offer->name;
}
if (null !== $model->pack->item->offer->article) {
    $jsonData["pack"]["item"]["offer"]["article"] = $model->pack->item->offer->article;
}
if (null !== $model->pack->item->offer->vatRate) {
    $jsonData["pack"]["item"]["offer"]["vatRate"] = $model->pack->item->offer->vatRate;
}
if (null !== $model->pack->item->offer->unit) {
    $jsonData["pack"]["item"]["offer"]["unit"] = [];
if (null !== $model->pack->item->offer->unit->code) {
    $jsonData["pack"]["item"]["offer"]["unit"]["code"] = $model->pack->item->offer->unit->code;
}
if (null !== $model->pack->item->offer->unit->name) {
    $jsonData["pack"]["item"]["offer"]["unit"]["name"] = $model->pack->item->offer->unit->name;
}
if (null !== $model->pack->item->offer->unit->sym) {
    $jsonData["pack"]["item"]["offer"]["unit"]["sym"] = $model->pack->item->offer->unit->sym;
}

if (0 === \count($jsonData["pack"]["item"]["offer"]["unit"])) {
    $jsonData["pack"]["item"]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->pack->item->offer->barcode) {
    $jsonData["pack"]["item"]["offer"]["barcode"] = $model->pack->item->offer->barcode;
}
if (null !== $model->pack->item->offer->properties) {
    $jsonData["pack"]["item"]["offer"]["properties"] = [];
foreach (array_keys($model->pack->item->offer->properties) as $index39) {
    $jsonData["pack"]["item"]["offer"]["properties"] = $model->pack->item->offer->properties;
}

}

if (0 === \count($jsonData["pack"]["item"]["offer"])) {
    $jsonData["pack"]["item"]["offer"] = $emptyObject;
}

}
if (null !== $model->pack->item->order) {
    $jsonData["pack"]["item"]["order"] = [];
if (null !== $model->pack->item->order->id) {
    $jsonData["pack"]["item"]["order"]["id"] = $model->pack->item->order->id;
}

if (0 === \count($jsonData["pack"]["item"]["order"])) {
    $jsonData["pack"]["item"]["order"] = $emptyObject;
}

}
if (null !== $model->pack->item->productName) {
    $jsonData["pack"]["item"]["productName"] = $model->pack->item->productName;
}
if (null !== $model->pack->item->isCanceled) {
    $jsonData["pack"]["item"]["isCanceled"] = $model->pack->item->isCanceled;
}
if (null !== $model->pack->item->properties) {
    if (0 === \count($model->pack->item->properties)) {
    $jsonData["pack"]["item"]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->pack->item->properties) as $index30) {
        $jsonData["pack"]["item"]["properties"][$index30] = [];
if (null !== $model->pack->item->properties[$index30]->code) {
    $jsonData["pack"]["item"]["properties"][$index30]["code"] = $model->pack->item->properties[$index30]->code;
}
if (null !== $model->pack->item->properties[$index30]->name) {
    $jsonData["pack"]["item"]["properties"][$index30]["name"] = $model->pack->item->properties[$index30]->name;
}
if (null !== $model->pack->item->properties[$index30]->value) {
    $jsonData["pack"]["item"]["properties"][$index30]["value"] = $model->pack->item->properties[$index30]->value;
}

if (0 === \count($jsonData["pack"]["item"]["properties"][$index30])) {
    $jsonData["pack"]["item"]["properties"][$index30] = $emptyObject;
}

    }
}

}
if (null !== $model->pack->item->purchasePrice) {
    $jsonData["pack"]["item"]["purchasePrice"] = $model->pack->item->purchasePrice;
}

if (0 === \count($jsonData["pack"]["item"])) {
    $jsonData["pack"]["item"] = $emptyObject;
}

}
if (null !== $model->pack->itemId) {
    $jsonData["pack"]["itemId"] = $model->pack->itemId;
}
if (null !== $model->pack->shipmentDate) {
    $jsonData["pack"]["shipmentDate"] = $model->pack->shipmentDate->format('Y-m-d');;
}
if (null !== $model->pack->invoiceNumber) {
    $jsonData["pack"]["invoiceNumber"] = $model->pack->invoiceNumber;
}
if (null !== $model->pack->deliveryNoteNumber) {
    $jsonData["pack"]["deliveryNoteNumber"] = $model->pack->deliveryNoteNumber;
}

if (0 === \count($jsonData["pack"])) {
    $jsonData["pack"] = $emptyObject;
}

}
if (null !== $model->source) {
    $jsonData["source"] = $model->source;
}
if (null !== $model->user) {
    $jsonData["user"] = [];
if (null !== $model->user->id) {
    $jsonData["user"]["id"] = $model->user->id;
}

if (0 === \count($jsonData["user"])) {
    $jsonData["user"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
