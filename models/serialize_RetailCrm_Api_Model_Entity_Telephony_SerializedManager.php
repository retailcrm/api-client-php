<?php

function serialize_RetailCrm_Api_Model_Entity_Telephony_SerializedManager(RetailCrm\Api\Model\Entity\Telephony\SerializedManager $model, bool $useStdClass = true)
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
if (null !== $model->email) {
    $jsonData["email"] = $model->email;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
