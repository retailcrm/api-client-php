<?php

function serialize_RetailCrm_Api_Model_Response_References_CouriersResponse(RetailCrm\Api\Model\Response\References\CouriersResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->couriers) {
    $jsonData["couriers"] = [];
foreach (array_keys($model->couriers) as $index12) {
    $jsonData["couriers"][$index12] = [];
if (null !== $model->couriers[$index12]->id) {
    $jsonData["couriers"][$index12]["id"] = $model->couriers[$index12]->id;
}
if (null !== $model->couriers[$index12]->firstName) {
    $jsonData["couriers"][$index12]["firstName"] = $model->couriers[$index12]->firstName;
}
if (null !== $model->couriers[$index12]->lastName) {
    $jsonData["couriers"][$index12]["lastName"] = $model->couriers[$index12]->lastName;
}
if (null !== $model->couriers[$index12]->patronymic) {
    $jsonData["couriers"][$index12]["patronymic"] = $model->couriers[$index12]->patronymic;
}
if (null !== $model->couriers[$index12]->active) {
    $jsonData["couriers"][$index12]["active"] = $model->couriers[$index12]->active;
}
if (null !== $model->couriers[$index12]->email) {
    $jsonData["couriers"][$index12]["email"] = $model->couriers[$index12]->email;
}
if (null !== $model->couriers[$index12]->phone) {
    $jsonData["couriers"][$index12]["phone"] = [];
if (null !== $model->couriers[$index12]->phone->number) {
    $jsonData["couriers"][$index12]["phone"]["number"] = $model->couriers[$index12]->phone->number;
}

if (0 === \count($jsonData["couriers"][$index12]["phone"])) {
    $jsonData["couriers"][$index12]["phone"] = $emptyObject;
}

}
if (null !== $model->couriers[$index12]->description) {
    $jsonData["couriers"][$index12]["description"] = $model->couriers[$index12]->description;
}

if (0 === \count($jsonData["couriers"][$index12])) {
    $jsonData["couriers"][$index12] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
