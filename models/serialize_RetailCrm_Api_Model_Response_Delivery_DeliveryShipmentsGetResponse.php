<?php

function serialize_RetailCrm_Api_Model_Response_Delivery_DeliveryShipmentsGetResponse(RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsGetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->deliveryShipment) {
    $jsonData["deliveryShipment"] = [];
if (null !== $model->deliveryShipment->integrationCode) {
    $jsonData["deliveryShipment"]["integrationCode"] = $model->deliveryShipment->integrationCode;
}
if (null !== $model->deliveryShipment->id) {
    $jsonData["deliveryShipment"]["id"] = $model->deliveryShipment->id;
}
if (null !== $model->deliveryShipment->externalId) {
    $jsonData["deliveryShipment"]["externalId"] = $model->deliveryShipment->externalId;
}
if (null !== $model->deliveryShipment->deliveryType) {
    $jsonData["deliveryShipment"]["deliveryType"] = $model->deliveryShipment->deliveryType;
}
if (null !== $model->deliveryShipment->store) {
    $jsonData["deliveryShipment"]["store"] = $model->deliveryShipment->store;
}
if (null !== $model->deliveryShipment->managerId) {
    $jsonData["deliveryShipment"]["managerId"] = $model->deliveryShipment->managerId;
}
if (null !== $model->deliveryShipment->status) {
    $jsonData["deliveryShipment"]["status"] = $model->deliveryShipment->status;
}
if (null !== $model->deliveryShipment->date) {
    $jsonData["deliveryShipment"]["date"] = $model->deliveryShipment->date->format('Y-m-d');;
}
if (null !== $model->deliveryShipment->time) {
    $jsonData["deliveryShipment"]["time"] = [];
if (null !== $model->deliveryShipment->time->from) {
    $jsonData["deliveryShipment"]["time"]["from"] = $model->deliveryShipment->time->from->format('H:i');;
}
if (null !== $model->deliveryShipment->time->to) {
    $jsonData["deliveryShipment"]["time"]["to"] = $model->deliveryShipment->time->to->format('H:i');;
}
if (null !== $model->deliveryShipment->time->custom) {
    $jsonData["deliveryShipment"]["time"]["custom"] = $model->deliveryShipment->time->custom;
}

if (0 === \count($jsonData["deliveryShipment"]["time"])) {
    $jsonData["deliveryShipment"]["time"] = $emptyObject;
}

}
if (null !== $model->deliveryShipment->comment) {
    $jsonData["deliveryShipment"]["comment"] = $model->deliveryShipment->comment;
}
if (null !== $model->deliveryShipment->orders) {
    $jsonData["deliveryShipment"]["orders"] = [];
foreach (array_keys($model->deliveryShipment->orders) as $index30) {
    $jsonData["deliveryShipment"]["orders"][$index30] = [];
if (null !== $model->deliveryShipment->orders[$index30]->id) {
    $jsonData["deliveryShipment"]["orders"][$index30]["id"] = $model->deliveryShipment->orders[$index30]->id;
}
if (null !== $model->deliveryShipment->orders[$index30]->externalId) {
    $jsonData["deliveryShipment"]["orders"][$index30]["externalId"] = $model->deliveryShipment->orders[$index30]->externalId;
}
if (null !== $model->deliveryShipment->orders[$index30]->number) {
    $jsonData["deliveryShipment"]["orders"][$index30]["number"] = $model->deliveryShipment->orders[$index30]->number;
}

if (0 === \count($jsonData["deliveryShipment"]["orders"][$index30])) {
    $jsonData["deliveryShipment"]["orders"][$index30] = $emptyObject;
}

}

}
if (null !== $model->deliveryShipment->extraData) {
    $jsonData["deliveryShipment"]["extraData"] = [];
foreach (array_keys($model->deliveryShipment->extraData) as $index33) {
    $jsonData["deliveryShipment"]["extraData"] = $model->deliveryShipment->extraData;
}

}
if (null !== $model->deliveryShipment->lunchTime) {
    $jsonData["deliveryShipment"]["lunchTime"] = [];
if (null !== $model->deliveryShipment->lunchTime->from) {
    $jsonData["deliveryShipment"]["lunchTime"]["from"] = $model->deliveryShipment->lunchTime->from->format('H:i');;
}
if (null !== $model->deliveryShipment->lunchTime->to) {
    $jsonData["deliveryShipment"]["lunchTime"]["to"] = $model->deliveryShipment->lunchTime->to->format('H:i');;
}
if (null !== $model->deliveryShipment->lunchTime->custom) {
    $jsonData["deliveryShipment"]["lunchTime"]["custom"] = $model->deliveryShipment->lunchTime->custom;
}

if (0 === \count($jsonData["deliveryShipment"]["lunchTime"])) {
    $jsonData["deliveryShipment"]["lunchTime"] = $emptyObject;
}

}

if (0 === \count($jsonData["deliveryShipment"])) {
    $jsonData["deliveryShipment"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
