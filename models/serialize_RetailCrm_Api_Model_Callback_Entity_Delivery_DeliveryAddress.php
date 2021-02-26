<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_DeliveryAddress(RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->index) {
    $jsonData["index"] = $model->index;
}
if (null !== $model->countryIso) {
    $jsonData["countryIso"] = $model->countryIso;
}
if (null !== $model->region) {
    $jsonData["region"] = $model->region;
}
if (null !== $model->regionId) {
    $jsonData["regionId"] = $model->regionId;
}
if (null !== $model->city) {
    $jsonData["city"] = $model->city;
}
if (null !== $model->cityId) {
    $jsonData["cityId"] = $model->cityId;
}
if (null !== $model->cityType) {
    $jsonData["cityType"] = $model->cityType;
}
if (null !== $model->street) {
    $jsonData["street"] = $model->street;
}
if (null !== $model->streetId) {
    $jsonData["streetId"] = $model->streetId;
}
if (null !== $model->streetType) {
    $jsonData["streetType"] = $model->streetType;
}
if (null !== $model->building) {
    $jsonData["building"] = $model->building;
}
if (null !== $model->flat) {
    $jsonData["flat"] = $model->flat;
}
if (null !== $model->floor) {
    $jsonData["floor"] = $model->floor;
}
if (null !== $model->block) {
    $jsonData["block"] = $model->block;
}
if (null !== $model->house) {
    $jsonData["house"] = $model->house;
}
if (null !== $model->housing) {
    $jsonData["housing"] = $model->housing;
}
if (null !== $model->metro) {
    $jsonData["metro"] = $model->metro;
}
if (null !== $model->notes) {
    $jsonData["notes"] = $model->notes;
}
if (null !== $model->text) {
    $jsonData["text"] = $model->text;
}
if (null !== $model->terminal) {
    $jsonData["terminal"] = $model->terminal;
}
if (null !== $model->terminalData) {
    $jsonData["terminalData"] = [];
if (null !== $model->terminalData->code) {
    $jsonData["terminalData"]["code"] = $model->terminalData->code;
}
if (null !== $model->terminalData->cost) {
    $jsonData["terminalData"]["cost"] = $model->terminalData->cost;
}
if (null !== $model->terminalData->name) {
    $jsonData["terminalData"]["name"] = $model->terminalData->name;
}
if (null !== $model->terminalData->description) {
    $jsonData["terminalData"]["description"] = $model->terminalData->description;
}
if (null !== $model->terminalData->address) {
    $jsonData["terminalData"]["address"] = $model->terminalData->address;
}
if (null !== $model->terminalData->schedule) {
    $jsonData["terminalData"]["schedule"] = $model->terminalData->schedule;
}
if (null !== $model->terminalData->phone) {
    $jsonData["terminalData"]["phone"] = $model->terminalData->phone;
}
if (null !== $model->terminalData->extraData) {
    $jsonData["terminalData"]["extraData"] = [];
foreach (array_keys($model->terminalData->extraData) as $index29) {
    $jsonData["terminalData"]["extraData"] = $model->terminalData->extraData;
}

}
if (null !== $model->terminalData->coordinates) {
    $jsonData["terminalData"]["coordinates"] = [];
if (null !== $model->terminalData->coordinates->latitude) {
    $jsonData["terminalData"]["coordinates"]["latitude"] = $model->terminalData->coordinates->latitude;
}
if (null !== $model->terminalData->coordinates->longitude) {
    $jsonData["terminalData"]["coordinates"]["longitude"] = $model->terminalData->coordinates->longitude;
}

if (0 === \count($jsonData["terminalData"]["coordinates"])) {
    $jsonData["terminalData"]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["terminalData"])) {
    $jsonData["terminalData"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
