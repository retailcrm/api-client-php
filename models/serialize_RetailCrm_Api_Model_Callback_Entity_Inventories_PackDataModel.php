<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Inventories_PackDataModel(RetailCrm\Api\Model\Callback\Entity\Inventories\PackDataModel $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->item) {
    $jsonData["item"] = [];
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

if (0 === \count($jsonData["item"])) {
    $jsonData["item"] = $emptyObject;
}

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
if (null !== $model->offer->site) {
    $jsonData["offer"]["site"] = $model->offer->site;
}
if (null !== $model->offer->purchasePrice) {
    $jsonData["offer"]["purchasePrice"] = $model->offer->purchasePrice;
}
if (null !== $model->offer->quantity) {
    $jsonData["offer"]["quantity"] = $model->offer->quantity;
}
if (null !== $model->offer->stores) {
    $jsonData["offer"]["stores"] = [];
if (null !== $model->offer->stores->quantity) {
    $jsonData["offer"]["stores"]["quantity"] = $model->offer->stores->quantity;
}
if (null !== $model->offer->stores->purchasePrice) {
    $jsonData["offer"]["stores"]["purchasePrice"] = $model->offer->stores->purchasePrice;
}
if (null !== $model->offer->stores->store) {
    $jsonData["offer"]["stores"]["store"] = $model->offer->stores->store;
}

if (0 === \count($jsonData["offer"]["stores"])) {
    $jsonData["offer"]["stores"] = $emptyObject;
}

}

if (0 === \count($jsonData["offer"])) {
    $jsonData["offer"] = $emptyObject;
}

}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}
if (null !== $model->store) {
    $jsonData["store"] = $model->store;
}
if (null !== $model->purchasePrice) {
    $jsonData["purchasePrice"] = $model->purchasePrice;
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
