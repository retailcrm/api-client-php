<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Delivery_GetResponse(RetailCrm\Api\Model\Callback\Response\Delivery\GetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->result) {
    $jsonData["result"] = [];
if (null !== $model->result->trackNumber) {
    $jsonData["result"]["trackNumber"] = $model->result->trackNumber;
}
if (null !== $model->result->cost) {
    $jsonData["result"]["cost"] = $model->result->cost;
}
if (null !== $model->result->shipmentDate) {
    $jsonData["result"]["shipmentDate"] = $model->result->shipmentDate->format('Y-m-d H:i:s');;
}
if (null !== $model->result->deliveryDate) {
    $jsonData["result"]["deliveryDate"] = $model->result->deliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->result->deliveryTime) {
    $jsonData["result"]["deliveryTime"] = [];
if (null !== $model->result->deliveryTime->from) {
    $jsonData["result"]["deliveryTime"]["from"] = $model->result->deliveryTime->from->format('H:i');;
}
if (null !== $model->result->deliveryTime->to) {
    $jsonData["result"]["deliveryTime"]["to"] = $model->result->deliveryTime->to->format('H:i');;
}
if (null !== $model->result->deliveryTime->custom) {
    $jsonData["result"]["deliveryTime"]["custom"] = $model->result->deliveryTime->custom;
}

if (0 === \count($jsonData["result"]["deliveryTime"])) {
    $jsonData["result"]["deliveryTime"] = $emptyObject;
}

}
if (null !== $model->result->tariff) {
    $jsonData["result"]["tariff"] = $model->result->tariff;
}
if (null !== $model->result->tariffName) {
    $jsonData["result"]["tariffName"] = $model->result->tariffName;
}
if (null !== $model->result->payerType) {
    $jsonData["result"]["payerType"] = $model->result->payerType;
}
if (null !== $model->result->status) {
    $jsonData["result"]["status"] = [];
if (null !== $model->result->status->code) {
    $jsonData["result"]["status"]["code"] = $model->result->status->code;
}
if (null !== $model->result->status->updatedAt) {
    $jsonData["result"]["status"]["updatedAt"] = $model->result->status->updatedAt->format('Y-m-d\TH:i:sP');;
}
if (null !== $model->result->status->comment) {
    $jsonData["result"]["status"]["comment"] = $model->result->status->comment;
}

if (0 === \count($jsonData["result"]["status"])) {
    $jsonData["result"]["status"] = $emptyObject;
}

}
if (null !== $model->result->extraData) {
    $jsonData["result"]["extraData"] = [];
foreach (array_keys($model->result->extraData) as $index23) {
    $jsonData["result"]["extraData"] = $model->result->extraData;
}

}
if (null !== $model->result->shipmentAddress) {
    $jsonData["result"]["shipmentAddress"] = [];
if (null !== $model->result->shipmentAddress->index) {
    $jsonData["result"]["shipmentAddress"]["index"] = $model->result->shipmentAddress->index;
}
if (null !== $model->result->shipmentAddress->countryIso) {
    $jsonData["result"]["shipmentAddress"]["countryIso"] = $model->result->shipmentAddress->countryIso;
}
if (null !== $model->result->shipmentAddress->region) {
    $jsonData["result"]["shipmentAddress"]["region"] = $model->result->shipmentAddress->region;
}
if (null !== $model->result->shipmentAddress->regionId) {
    $jsonData["result"]["shipmentAddress"]["regionId"] = $model->result->shipmentAddress->regionId;
}
if (null !== $model->result->shipmentAddress->city) {
    $jsonData["result"]["shipmentAddress"]["city"] = $model->result->shipmentAddress->city;
}
if (null !== $model->result->shipmentAddress->cityId) {
    $jsonData["result"]["shipmentAddress"]["cityId"] = $model->result->shipmentAddress->cityId;
}
if (null !== $model->result->shipmentAddress->cityType) {
    $jsonData["result"]["shipmentAddress"]["cityType"] = $model->result->shipmentAddress->cityType;
}
if (null !== $model->result->shipmentAddress->street) {
    $jsonData["result"]["shipmentAddress"]["street"] = $model->result->shipmentAddress->street;
}
if (null !== $model->result->shipmentAddress->streetId) {
    $jsonData["result"]["shipmentAddress"]["streetId"] = $model->result->shipmentAddress->streetId;
}
if (null !== $model->result->shipmentAddress->streetType) {
    $jsonData["result"]["shipmentAddress"]["streetType"] = $model->result->shipmentAddress->streetType;
}
if (null !== $model->result->shipmentAddress->building) {
    $jsonData["result"]["shipmentAddress"]["building"] = $model->result->shipmentAddress->building;
}
if (null !== $model->result->shipmentAddress->flat) {
    $jsonData["result"]["shipmentAddress"]["flat"] = $model->result->shipmentAddress->flat;
}
if (null !== $model->result->shipmentAddress->floor) {
    $jsonData["result"]["shipmentAddress"]["floor"] = $model->result->shipmentAddress->floor;
}
if (null !== $model->result->shipmentAddress->block) {
    $jsonData["result"]["shipmentAddress"]["block"] = $model->result->shipmentAddress->block;
}
if (null !== $model->result->shipmentAddress->house) {
    $jsonData["result"]["shipmentAddress"]["house"] = $model->result->shipmentAddress->house;
}
if (null !== $model->result->shipmentAddress->housing) {
    $jsonData["result"]["shipmentAddress"]["housing"] = $model->result->shipmentAddress->housing;
}
if (null !== $model->result->shipmentAddress->metro) {
    $jsonData["result"]["shipmentAddress"]["metro"] = $model->result->shipmentAddress->metro;
}
if (null !== $model->result->shipmentAddress->notes) {
    $jsonData["result"]["shipmentAddress"]["notes"] = $model->result->shipmentAddress->notes;
}
if (null !== $model->result->shipmentAddress->text) {
    $jsonData["result"]["shipmentAddress"]["text"] = $model->result->shipmentAddress->text;
}
if (null !== $model->result->shipmentAddress->terminal) {
    $jsonData["result"]["shipmentAddress"]["terminal"] = $model->result->shipmentAddress->terminal;
}
if (null !== $model->result->shipmentAddress->terminalData) {
    $jsonData["result"]["shipmentAddress"]["terminalData"] = [];
if (null !== $model->result->shipmentAddress->terminalData->code) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["code"] = $model->result->shipmentAddress->terminalData->code;
}
if (null !== $model->result->shipmentAddress->terminalData->cost) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["cost"] = $model->result->shipmentAddress->terminalData->cost;
}
if (null !== $model->result->shipmentAddress->terminalData->name) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["name"] = $model->result->shipmentAddress->terminalData->name;
}
if (null !== $model->result->shipmentAddress->terminalData->description) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["description"] = $model->result->shipmentAddress->terminalData->description;
}
if (null !== $model->result->shipmentAddress->terminalData->address) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["address"] = $model->result->shipmentAddress->terminalData->address;
}
if (null !== $model->result->shipmentAddress->terminalData->schedule) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["schedule"] = $model->result->shipmentAddress->terminalData->schedule;
}
if (null !== $model->result->shipmentAddress->terminalData->phone) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["phone"] = $model->result->shipmentAddress->terminalData->phone;
}
if (null !== $model->result->shipmentAddress->terminalData->extraData) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["extraData"] = [];
foreach (array_keys($model->result->shipmentAddress->terminalData->extraData) as $index58) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["extraData"] = $model->result->shipmentAddress->terminalData->extraData;
}

}
if (null !== $model->result->shipmentAddress->terminalData->coordinates) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["coordinates"] = [];
if (null !== $model->result->shipmentAddress->terminalData->coordinates->latitude) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["coordinates"]["latitude"] = $model->result->shipmentAddress->terminalData->coordinates->latitude;
}
if (null !== $model->result->shipmentAddress->terminalData->coordinates->longitude) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["coordinates"]["longitude"] = $model->result->shipmentAddress->terminalData->coordinates->longitude;
}

if (0 === \count($jsonData["result"]["shipmentAddress"]["terminalData"]["coordinates"])) {
    $jsonData["result"]["shipmentAddress"]["terminalData"]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["result"]["shipmentAddress"]["terminalData"])) {
    $jsonData["result"]["shipmentAddress"]["terminalData"] = $emptyObject;
}

}

if (0 === \count($jsonData["result"]["shipmentAddress"])) {
    $jsonData["result"]["shipmentAddress"] = $emptyObject;
}

}
if (null !== $model->result->deliveryAddress) {
    $jsonData["result"]["deliveryAddress"] = [];
if (null !== $model->result->deliveryAddress->index) {
    $jsonData["result"]["deliveryAddress"]["index"] = $model->result->deliveryAddress->index;
}
if (null !== $model->result->deliveryAddress->countryIso) {
    $jsonData["result"]["deliveryAddress"]["countryIso"] = $model->result->deliveryAddress->countryIso;
}
if (null !== $model->result->deliveryAddress->region) {
    $jsonData["result"]["deliveryAddress"]["region"] = $model->result->deliveryAddress->region;
}
if (null !== $model->result->deliveryAddress->regionId) {
    $jsonData["result"]["deliveryAddress"]["regionId"] = $model->result->deliveryAddress->regionId;
}
if (null !== $model->result->deliveryAddress->city) {
    $jsonData["result"]["deliveryAddress"]["city"] = $model->result->deliveryAddress->city;
}
if (null !== $model->result->deliveryAddress->cityId) {
    $jsonData["result"]["deliveryAddress"]["cityId"] = $model->result->deliveryAddress->cityId;
}
if (null !== $model->result->deliveryAddress->cityType) {
    $jsonData["result"]["deliveryAddress"]["cityType"] = $model->result->deliveryAddress->cityType;
}
if (null !== $model->result->deliveryAddress->street) {
    $jsonData["result"]["deliveryAddress"]["street"] = $model->result->deliveryAddress->street;
}
if (null !== $model->result->deliveryAddress->streetId) {
    $jsonData["result"]["deliveryAddress"]["streetId"] = $model->result->deliveryAddress->streetId;
}
if (null !== $model->result->deliveryAddress->streetType) {
    $jsonData["result"]["deliveryAddress"]["streetType"] = $model->result->deliveryAddress->streetType;
}
if (null !== $model->result->deliveryAddress->building) {
    $jsonData["result"]["deliveryAddress"]["building"] = $model->result->deliveryAddress->building;
}
if (null !== $model->result->deliveryAddress->flat) {
    $jsonData["result"]["deliveryAddress"]["flat"] = $model->result->deliveryAddress->flat;
}
if (null !== $model->result->deliveryAddress->floor) {
    $jsonData["result"]["deliveryAddress"]["floor"] = $model->result->deliveryAddress->floor;
}
if (null !== $model->result->deliveryAddress->block) {
    $jsonData["result"]["deliveryAddress"]["block"] = $model->result->deliveryAddress->block;
}
if (null !== $model->result->deliveryAddress->house) {
    $jsonData["result"]["deliveryAddress"]["house"] = $model->result->deliveryAddress->house;
}
if (null !== $model->result->deliveryAddress->housing) {
    $jsonData["result"]["deliveryAddress"]["housing"] = $model->result->deliveryAddress->housing;
}
if (null !== $model->result->deliveryAddress->metro) {
    $jsonData["result"]["deliveryAddress"]["metro"] = $model->result->deliveryAddress->metro;
}
if (null !== $model->result->deliveryAddress->notes) {
    $jsonData["result"]["deliveryAddress"]["notes"] = $model->result->deliveryAddress->notes;
}
if (null !== $model->result->deliveryAddress->text) {
    $jsonData["result"]["deliveryAddress"]["text"] = $model->result->deliveryAddress->text;
}
if (null !== $model->result->deliveryAddress->terminal) {
    $jsonData["result"]["deliveryAddress"]["terminal"] = $model->result->deliveryAddress->terminal;
}
if (null !== $model->result->deliveryAddress->terminalData) {
    $jsonData["result"]["deliveryAddress"]["terminalData"] = [];
if (null !== $model->result->deliveryAddress->terminalData->code) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["code"] = $model->result->deliveryAddress->terminalData->code;
}
if (null !== $model->result->deliveryAddress->terminalData->cost) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["cost"] = $model->result->deliveryAddress->terminalData->cost;
}
if (null !== $model->result->deliveryAddress->terminalData->name) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["name"] = $model->result->deliveryAddress->terminalData->name;
}
if (null !== $model->result->deliveryAddress->terminalData->description) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["description"] = $model->result->deliveryAddress->terminalData->description;
}
if (null !== $model->result->deliveryAddress->terminalData->address) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["address"] = $model->result->deliveryAddress->terminalData->address;
}
if (null !== $model->result->deliveryAddress->terminalData->schedule) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["schedule"] = $model->result->deliveryAddress->terminalData->schedule;
}
if (null !== $model->result->deliveryAddress->terminalData->phone) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["phone"] = $model->result->deliveryAddress->terminalData->phone;
}
if (null !== $model->result->deliveryAddress->terminalData->extraData) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["extraData"] = [];
foreach (array_keys($model->result->deliveryAddress->terminalData->extraData) as $index58) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["extraData"] = $model->result->deliveryAddress->terminalData->extraData;
}

}
if (null !== $model->result->deliveryAddress->terminalData->coordinates) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["coordinates"] = [];
if (null !== $model->result->deliveryAddress->terminalData->coordinates->latitude) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["coordinates"]["latitude"] = $model->result->deliveryAddress->terminalData->coordinates->latitude;
}
if (null !== $model->result->deliveryAddress->terminalData->coordinates->longitude) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["coordinates"]["longitude"] = $model->result->deliveryAddress->terminalData->coordinates->longitude;
}

if (0 === \count($jsonData["result"]["deliveryAddress"]["terminalData"]["coordinates"])) {
    $jsonData["result"]["deliveryAddress"]["terminalData"]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["result"]["deliveryAddress"]["terminalData"])) {
    $jsonData["result"]["deliveryAddress"]["terminalData"] = $emptyObject;
}

}

if (0 === \count($jsonData["result"]["deliveryAddress"])) {
    $jsonData["result"]["deliveryAddress"] = $emptyObject;
}

}

if (0 === \count($jsonData["result"])) {
    $jsonData["result"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
