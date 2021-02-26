<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Delivery_CalculateResponse(RetailCrm\Api\Model\Callback\Response\Delivery\CalculateResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->result) {
    $jsonData["result"] = [];
foreach (array_keys($model->result) as $index10) {
    $jsonData["result"][$index10] = [];
if (null !== $model->result[$index10]->code) {
    $jsonData["result"][$index10]["code"] = $model->result[$index10]->code;
}
if (null !== $model->result[$index10]->group) {
    $jsonData["result"][$index10]["group"] = $model->result[$index10]->group;
}
if (null !== $model->result[$index10]->name) {
    $jsonData["result"][$index10]["name"] = $model->result[$index10]->name;
}
if (null !== $model->result[$index10]->type) {
    $jsonData["result"][$index10]["type"] = $model->result[$index10]->type;
}
if (null !== $model->result[$index10]->description) {
    $jsonData["result"][$index10]["description"] = $model->result[$index10]->description;
}
if (null !== $model->result[$index10]->cost) {
    $jsonData["result"][$index10]["cost"] = $model->result[$index10]->cost;
}
if (null !== $model->result[$index10]->minTerm) {
    $jsonData["result"][$index10]["minTerm"] = $model->result[$index10]->minTerm;
}
if (null !== $model->result[$index10]->maxTerm) {
    $jsonData["result"][$index10]["maxTerm"] = $model->result[$index10]->maxTerm;
}
if (null !== $model->result[$index10]->extraData) {
    $jsonData["result"][$index10]["extraData"] = [];
foreach (array_keys($model->result[$index10]->extraData) as $index33) {
    $jsonData["result"][$index10]["extraData"] = $model->result[$index10]->extraData;
}

}
if (null !== $model->result[$index10]->extraDataAvailable) {
    $jsonData["result"][$index10]["extraDataAvailable"] = [];
foreach (array_keys($model->result[$index10]->extraDataAvailable) as $index42) {
    $jsonData["result"][$index10]["extraDataAvailable"] = $model->result[$index10]->extraDataAvailable;
}

}
if (null !== $model->result[$index10]->pickuppointList) {
    $jsonData["result"][$index10]["pickuppointList"] = [];
foreach (array_keys($model->result[$index10]->pickuppointList) as $index39) {
    $jsonData["result"][$index10]["pickuppointList"][$index39] = [];
if (null !== $model->result[$index10]->pickuppointList[$index39]->code) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["code"] = $model->result[$index10]->pickuppointList[$index39]->code;
}
if (null !== $model->result[$index10]->pickuppointList[$index39]->cost) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["cost"] = $model->result[$index10]->pickuppointList[$index39]->cost;
}
if (null !== $model->result[$index10]->pickuppointList[$index39]->name) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["name"] = $model->result[$index10]->pickuppointList[$index39]->name;
}
if (null !== $model->result[$index10]->pickuppointList[$index39]->description) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["description"] = $model->result[$index10]->pickuppointList[$index39]->description;
}
if (null !== $model->result[$index10]->pickuppointList[$index39]->address) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["address"] = $model->result[$index10]->pickuppointList[$index39]->address;
}
if (null !== $model->result[$index10]->pickuppointList[$index39]->schedule) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["schedule"] = $model->result[$index10]->pickuppointList[$index39]->schedule;
}
if (null !== $model->result[$index10]->pickuppointList[$index39]->phone) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["phone"] = $model->result[$index10]->pickuppointList[$index39]->phone;
}
if (null !== $model->result[$index10]->pickuppointList[$index39]->extraData) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["extraData"] = [];
foreach (array_keys($model->result[$index10]->pickuppointList[$index39]->extraData) as $index62) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["extraData"] = $model->result[$index10]->pickuppointList[$index39]->extraData;
}

}
if (null !== $model->result[$index10]->pickuppointList[$index39]->coordinates) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["coordinates"] = [];
if (null !== $model->result[$index10]->pickuppointList[$index39]->coordinates->latitude) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["coordinates"]["latitude"] = $model->result[$index10]->pickuppointList[$index39]->coordinates->latitude;
}
if (null !== $model->result[$index10]->pickuppointList[$index39]->coordinates->longitude) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["coordinates"]["longitude"] = $model->result[$index10]->pickuppointList[$index39]->coordinates->longitude;
}

if (0 === \count($jsonData["result"][$index10]["pickuppointList"][$index39]["coordinates"])) {
    $jsonData["result"][$index10]["pickuppointList"][$index39]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["result"][$index10]["pickuppointList"][$index39])) {
    $jsonData["result"][$index10]["pickuppointList"][$index39] = $emptyObject;
}

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
