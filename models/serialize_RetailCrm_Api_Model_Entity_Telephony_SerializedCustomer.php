<?php

function serialize_RetailCrm_Api_Model_Entity_Telephony_SerializedCustomer(RetailCrm\Api\Model\Entity\Telephony\SerializedCustomer $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
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
if (null !== $model->phones) {
    $jsonData["phones"] = [];
foreach (array_keys($model->phones) as $index10) {
    $jsonData["phones"][$index10] = [];
if (null !== $model->phones[$index10]->number) {
    $jsonData["phones"][$index10]["number"] = $model->phones[$index10]->number;
}

if (0 === \count($jsonData["phones"][$index10])) {
    $jsonData["phones"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
