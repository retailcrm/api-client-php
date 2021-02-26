<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Manager(RetailCrm\Api\Model\Callback\Entity\Delivery\Manager $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->lastName) {
    $jsonData["lastName"] = $model->lastName;
}
if (null !== $model->firstName) {
    $jsonData["firstName"] = $model->firstName;
}
if (null !== $model->patronymic) {
    $jsonData["patronymic"] = $model->patronymic;
}
if (null !== $model->phone) {
    $jsonData["phone"] = $model->phone;
}
if (null !== $model->email) {
    $jsonData["email"] = $model->email;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
