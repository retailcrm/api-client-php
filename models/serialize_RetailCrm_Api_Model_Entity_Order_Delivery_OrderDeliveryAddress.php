<?php

function serialize_RetailCrm_Api_Model_Entity_Order_Delivery_OrderDeliveryAddress(RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
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
if (null !== $model->text) {
    $jsonData["text"] = $model->text;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
