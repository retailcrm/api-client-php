<?php

function serialize_RetailCrm_Api_Model_Entity_Delivery_DeliveryShipment(RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->integrationCode) {
    $jsonData["integrationCode"] = $model->integrationCode;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->deliveryType) {
    $jsonData["deliveryType"] = $model->deliveryType;
}
if (null !== $model->store) {
    $jsonData["store"] = $model->store;
}
if (null !== $model->managerId) {
    $jsonData["managerId"] = $model->managerId;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
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
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}
if (null !== $model->orders) {
    $jsonData["orders"] = [];
foreach (array_keys($model->orders) as $index10) {
    $jsonData["orders"][$index10] = [];
if (null !== $model->orders[$index10]->id) {
    $jsonData["orders"][$index10]["id"] = $model->orders[$index10]->id;
}
if (null !== $model->orders[$index10]->externalId) {
    $jsonData["orders"][$index10]["externalId"] = $model->orders[$index10]->externalId;
}
if (null !== $model->orders[$index10]->number) {
    $jsonData["orders"][$index10]["number"] = $model->orders[$index10]->number;
}

if (0 === \count($jsonData["orders"][$index10])) {
    $jsonData["orders"][$index10] = $emptyObject;
}

}

}
if (null !== $model->extraData) {
    $jsonData["extraData"] = [];
foreach (array_keys($model->extraData) as $index13) {
    $jsonData["extraData"] = $model->extraData;
}

}
if (null !== $model->lunchTime) {
    $jsonData["lunchTime"] = [];
if (null !== $model->lunchTime->from) {
    $jsonData["lunchTime"]["from"] = $model->lunchTime->from->format('H:i');;
}
if (null !== $model->lunchTime->to) {
    $jsonData["lunchTime"]["to"] = $model->lunchTime->to->format('H:i');;
}
if (null !== $model->lunchTime->custom) {
    $jsonData["lunchTime"]["custom"] = $model->lunchTime->custom;
}

if (0 === \count($jsonData["lunchTime"])) {
    $jsonData["lunchTime"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
