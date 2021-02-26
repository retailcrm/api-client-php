<?php

function serialize_RetailCrm_Api_Model_Entity_Delivery_SerializedOrderDelivery(RetailCrm\Api\Model\Entity\Delivery\SerializedOrderDelivery $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->date) {
    $jsonData["date"] = $model->date->format('Y-m-d');;
}
if (null !== $model->time) {
    $jsonData["time"] = [];
if (null !== $model->time->from) {
    $jsonData["time"]["from"] = $model->time->from->format('H:i');;
}
if (null !== $model->time->to) {
    $jsonData["time"]["to"] = $model->time->to->format('H:i');;
}
if (null !== $model->time->custom) {
    $jsonData["time"]["custom"] = $model->time->custom;
}

if (0 === \count($jsonData["time"])) {
    $jsonData["time"] = $emptyObject;
}

}
if (null !== $model->address) {
    $jsonData["address"] = [];
if (null !== $model->address->id) {
    $jsonData["address"]["id"] = $model->address->id;
}
if (null !== $model->address->index) {
    $jsonData["address"]["index"] = $model->address->index;
}
if (null !== $model->address->countryIso) {
    $jsonData["address"]["countryIso"] = $model->address->countryIso;
}
if (null !== $model->address->region) {
    $jsonData["address"]["region"] = $model->address->region;
}
if (null !== $model->address->regionId) {
    $jsonData["address"]["regionId"] = $model->address->regionId;
}
if (null !== $model->address->city) {
    $jsonData["address"]["city"] = $model->address->city;
}
if (null !== $model->address->cityId) {
    $jsonData["address"]["cityId"] = $model->address->cityId;
}
if (null !== $model->address->cityType) {
    $jsonData["address"]["cityType"] = $model->address->cityType;
}
if (null !== $model->address->street) {
    $jsonData["address"]["street"] = $model->address->street;
}
if (null !== $model->address->streetId) {
    $jsonData["address"]["streetId"] = $model->address->streetId;
}
if (null !== $model->address->streetType) {
    $jsonData["address"]["streetType"] = $model->address->streetType;
}
if (null !== $model->address->building) {
    $jsonData["address"]["building"] = $model->address->building;
}
if (null !== $model->address->flat) {
    $jsonData["address"]["flat"] = $model->address->flat;
}
if (null !== $model->address->floor) {
    $jsonData["address"]["floor"] = $model->address->floor;
}
if (null !== $model->address->block) {
    $jsonData["address"]["block"] = $model->address->block;
}
if (null !== $model->address->house) {
    $jsonData["address"]["house"] = $model->address->house;
}
if (null !== $model->address->housing) {
    $jsonData["address"]["housing"] = $model->address->housing;
}
if (null !== $model->address->metro) {
    $jsonData["address"]["metro"] = $model->address->metro;
}
if (null !== $model->address->text) {
    $jsonData["address"]["text"] = $model->address->text;
}

if (0 === \count($jsonData["address"])) {
    $jsonData["address"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
