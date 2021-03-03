<?php

function serialize_RetailCrm_Api_Model_Entity_References_Courier(RetailCrm\Api\Model\Entity\References\Courier $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->firstName) {
    $jsonData["firstName"] = $model->firstName;
}
if (null !== $model->lastName) {
    $jsonData["lastName"] = $model->lastName;
}
if (null !== $model->patronymic) {
    $jsonData["patronymic"] = $model->patronymic;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->email) {
    $jsonData["email"] = $model->email;
}
if (null !== $model->phone) {
    $jsonData["phone"] = [];
if (null !== $model->phone->number) {
    $jsonData["phone"]["number"] = $model->phone->number;
}

if (0 === \count($jsonData["phone"])) {
    $jsonData["phone"] = $emptyObject;
}

}
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
