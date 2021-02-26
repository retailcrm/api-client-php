<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_ResponseProperty_ResponseCalculate(RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseCalculate $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->group) {
    $jsonData["group"] = $model->group;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}
if (null !== $model->minTerm) {
    $jsonData["minTerm"] = $model->minTerm;
}
if (null !== $model->maxTerm) {
    $jsonData["maxTerm"] = $model->maxTerm;
}
if (null !== $model->extraData) {
    $jsonData["extraData"] = [];
foreach (array_keys($model->extraData) as $index13) {
    $jsonData["extraData"] = $model->extraData;
}

}
if (null !== $model->extraDataAvailable) {
    $jsonData["extraDataAvailable"] = [];
foreach (array_keys($model->extraDataAvailable) as $index22) {
    $jsonData["extraDataAvailable"] = $model->extraDataAvailable;
}

}
if (null !== $model->pickuppointList) {
    $jsonData["pickuppointList"] = [];
foreach (array_keys($model->pickuppointList) as $index19) {
    $jsonData["pickuppointList"][$index19] = [];
if (null !== $model->pickuppointList[$index19]->code) {
    $jsonData["pickuppointList"][$index19]["code"] = $model->pickuppointList[$index19]->code;
}
if (null !== $model->pickuppointList[$index19]->cost) {
    $jsonData["pickuppointList"][$index19]["cost"] = $model->pickuppointList[$index19]->cost;
}
if (null !== $model->pickuppointList[$index19]->name) {
    $jsonData["pickuppointList"][$index19]["name"] = $model->pickuppointList[$index19]->name;
}
if (null !== $model->pickuppointList[$index19]->description) {
    $jsonData["pickuppointList"][$index19]["description"] = $model->pickuppointList[$index19]->description;
}
if (null !== $model->pickuppointList[$index19]->address) {
    $jsonData["pickuppointList"][$index19]["address"] = $model->pickuppointList[$index19]->address;
}
if (null !== $model->pickuppointList[$index19]->schedule) {
    $jsonData["pickuppointList"][$index19]["schedule"] = $model->pickuppointList[$index19]->schedule;
}
if (null !== $model->pickuppointList[$index19]->phone) {
    $jsonData["pickuppointList"][$index19]["phone"] = $model->pickuppointList[$index19]->phone;
}
if (null !== $model->pickuppointList[$index19]->extraData) {
    $jsonData["pickuppointList"][$index19]["extraData"] = [];
foreach (array_keys($model->pickuppointList[$index19]->extraData) as $index42) {
    $jsonData["pickuppointList"][$index19]["extraData"] = $model->pickuppointList[$index19]->extraData;
}

}
if (null !== $model->pickuppointList[$index19]->coordinates) {
    $jsonData["pickuppointList"][$index19]["coordinates"] = [];
if (null !== $model->pickuppointList[$index19]->coordinates->latitude) {
    $jsonData["pickuppointList"][$index19]["coordinates"]["latitude"] = $model->pickuppointList[$index19]->coordinates->latitude;
}
if (null !== $model->pickuppointList[$index19]->coordinates->longitude) {
    $jsonData["pickuppointList"][$index19]["coordinates"]["longitude"] = $model->pickuppointList[$index19]->coordinates->longitude;
}

if (0 === \count($jsonData["pickuppointList"][$index19]["coordinates"])) {
    $jsonData["pickuppointList"][$index19]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["pickuppointList"][$index19])) {
    $jsonData["pickuppointList"][$index19] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
