<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Terminal(RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}
if (null !== $model->address) {
    $jsonData["address"] = $model->address;
}
if (null !== $model->schedule) {
    $jsonData["schedule"] = $model->schedule;
}
if (null !== $model->phone) {
    $jsonData["phone"] = $model->phone;
}
if (null !== $model->extraData) {
    $jsonData["extraData"] = [];
foreach (array_keys($model->extraData) as $index13) {
    $jsonData["extraData"] = $model->extraData;
}

}
if (null !== $model->coordinates) {
    $jsonData["coordinates"] = [];
if (null !== $model->coordinates->latitude) {
    $jsonData["coordinates"]["latitude"] = $model->coordinates->latitude;
}
if (null !== $model->coordinates->longitude) {
    $jsonData["coordinates"]["longitude"] = $model->coordinates->longitude;
}

if (0 === \count($jsonData["coordinates"])) {
    $jsonData["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
