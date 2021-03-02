<?php

function serialize_RetailCrm_Api_Model_Entity_Delivery_SerializedOrder(RetailCrm\Api\Model\Entity\Delivery\SerializedOrder $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
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
if (null !== $model->items) {
    $jsonData["items"] = [];
foreach (array_keys($model->items) as $index9) {
    $jsonData["items"][$index9] = [];
if (null !== $model->items[$index9]->initialPrice) {
    $jsonData["items"][$index9]["initialPrice"] = $model->items[$index9]->initialPrice;
}
if (null !== $model->items[$index9]->discountManualAmount) {
    $jsonData["items"][$index9]["discountManualAmount"] = $model->items[$index9]->discountManualAmount;
}
if (null !== $model->items[$index9]->discountManualPercent) {
    $jsonData["items"][$index9]["discountManualPercent"] = $model->items[$index9]->discountManualPercent;
}
if (null !== $model->items[$index9]->quantity) {
    $jsonData["items"][$index9]["quantity"] = $model->items[$index9]->quantity;
}

if (0 === \count($jsonData["items"][$index9])) {
    $jsonData["items"][$index9] = $emptyObject;
}

}

}
if (null !== $model->delivery) {
    $jsonData["delivery"] = [];
if (null !== $model->delivery->date) {
    $jsonData["delivery"]["date"] = $model->delivery->date->format('Y-m-d');;
}
if (null !== $model->delivery->time) {
    $jsonData["delivery"]["time"] = [];
if (null !== $model->delivery->time->from) {
    $jsonData["delivery"]["time"]["from"] = $model->delivery->time->from->format('H:i');;
}
if (null !== $model->delivery->time->to) {
    $jsonData["delivery"]["time"]["to"] = $model->delivery->time->to->format('H:i');;
}
if (null !== $model->delivery->time->custom) {
    $jsonData["delivery"]["time"]["custom"] = $model->delivery->time->custom;
}

if (0 === \count($jsonData["delivery"]["time"])) {
    $jsonData["delivery"]["time"] = $emptyObject;
}

}
if (null !== $model->delivery->address) {
    $jsonData["delivery"]["address"] = [];
if (null !== $model->delivery->address->id) {
    $jsonData["delivery"]["address"]["id"] = $model->delivery->address->id;
}
if (null !== $model->delivery->address->index) {
    $jsonData["delivery"]["address"]["index"] = $model->delivery->address->index;
}
if (null !== $model->delivery->address->countryIso) {
    $jsonData["delivery"]["address"]["countryIso"] = $model->delivery->address->countryIso;
}
if (null !== $model->delivery->address->region) {
    $jsonData["delivery"]["address"]["region"] = $model->delivery->address->region;
}
if (null !== $model->delivery->address->regionId) {
    $jsonData["delivery"]["address"]["regionId"] = $model->delivery->address->regionId;
}
if (null !== $model->delivery->address->city) {
    $jsonData["delivery"]["address"]["city"] = $model->delivery->address->city;
}
if (null !== $model->delivery->address->cityId) {
    $jsonData["delivery"]["address"]["cityId"] = $model->delivery->address->cityId;
}
if (null !== $model->delivery->address->cityType) {
    $jsonData["delivery"]["address"]["cityType"] = $model->delivery->address->cityType;
}
if (null !== $model->delivery->address->street) {
    $jsonData["delivery"]["address"]["street"] = $model->delivery->address->street;
}
if (null !== $model->delivery->address->streetId) {
    $jsonData["delivery"]["address"]["streetId"] = $model->delivery->address->streetId;
}
if (null !== $model->delivery->address->streetType) {
    $jsonData["delivery"]["address"]["streetType"] = $model->delivery->address->streetType;
}
if (null !== $model->delivery->address->building) {
    $jsonData["delivery"]["address"]["building"] = $model->delivery->address->building;
}
if (null !== $model->delivery->address->flat) {
    $jsonData["delivery"]["address"]["flat"] = $model->delivery->address->flat;
}
if (null !== $model->delivery->address->floor) {
    $jsonData["delivery"]["address"]["floor"] = $model->delivery->address->floor;
}
if (null !== $model->delivery->address->block) {
    $jsonData["delivery"]["address"]["block"] = $model->delivery->address->block;
}
if (null !== $model->delivery->address->house) {
    $jsonData["delivery"]["address"]["house"] = $model->delivery->address->house;
}
if (null !== $model->delivery->address->housing) {
    $jsonData["delivery"]["address"]["housing"] = $model->delivery->address->housing;
}
if (null !== $model->delivery->address->metro) {
    $jsonData["delivery"]["address"]["metro"] = $model->delivery->address->metro;
}
if (null !== $model->delivery->address->text) {
    $jsonData["delivery"]["address"]["text"] = $model->delivery->address->text;
}
if (null !== $model->delivery->address->notes) {
    $jsonData["delivery"]["address"]["notes"] = $model->delivery->address->notes;
}

if (0 === \count($jsonData["delivery"]["address"])) {
    $jsonData["delivery"]["address"] = $emptyObject;
}

}

if (0 === \count($jsonData["delivery"])) {
    $jsonData["delivery"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
