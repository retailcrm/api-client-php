<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Delivery_ShipmentPointListResponse(RetailCrm\Api\Model\Callback\Response\Delivery\ShipmentPointListResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->result) {
    $jsonData["result"] = [];
foreach (array_keys($model->result) as $index10) {
    $jsonData["result"][$index10] = [];
if (null !== $model->result[$index10]->code) {
    $jsonData["result"][$index10]["code"] = $model->result[$index10]->code;
}
if (null !== $model->result[$index10]->cost) {
    $jsonData["result"][$index10]["cost"] = $model->result[$index10]->cost;
}
if (null !== $model->result[$index10]->name) {
    $jsonData["result"][$index10]["name"] = $model->result[$index10]->name;
}
if (null !== $model->result[$index10]->description) {
    $jsonData["result"][$index10]["description"] = $model->result[$index10]->description;
}
if (null !== $model->result[$index10]->address) {
    $jsonData["result"][$index10]["address"] = $model->result[$index10]->address;
}
if (null !== $model->result[$index10]->schedule) {
    $jsonData["result"][$index10]["schedule"] = $model->result[$index10]->schedule;
}
if (null !== $model->result[$index10]->phone) {
    $jsonData["result"][$index10]["phone"] = $model->result[$index10]->phone;
}
if (null !== $model->result[$index10]->extraData) {
    $jsonData["result"][$index10]["extraData"] = [];
foreach (array_keys($model->result[$index10]->extraData) as $index33) {
    $jsonData["result"][$index10]["extraData"] = $model->result[$index10]->extraData;
}

}
if (null !== $model->result[$index10]->coordinates) {
    $jsonData["result"][$index10]["coordinates"] = [];
if (null !== $model->result[$index10]->coordinates->latitude) {
    $jsonData["result"][$index10]["coordinates"]["latitude"] = $model->result[$index10]->coordinates->latitude;
}
if (null !== $model->result[$index10]->coordinates->longitude) {
    $jsonData["result"][$index10]["coordinates"]["longitude"] = $model->result[$index10]->coordinates->longitude;
}

if (0 === \count($jsonData["result"][$index10]["coordinates"])) {
    $jsonData["result"][$index10]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["result"][$index10])) {
    $jsonData["result"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
