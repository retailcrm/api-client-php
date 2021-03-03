<?php

function serialize_RetailCrm_Api_Model_Entity_References_PaymentStatus(RetailCrm\Api\Model\Entity\References\PaymentStatus $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->defaultForCrm) {
    $jsonData["defaultForCrm"] = $model->defaultForCrm;
}
if (null !== $model->defaultForApi) {
    $jsonData["defaultForApi"] = $model->defaultForApi;
}
if (null !== $model->paymentComplete) {
    $jsonData["paymentComplete"] = $model->paymentComplete;
}
if (null !== $model->ordering) {
    $jsonData["ordering"] = $model->ordering;
}
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}
if (null !== $model->paymentTypes) {
    $jsonData["paymentTypes"] = [];
foreach (array_keys($model->paymentTypes) as $index16) {
    $jsonData["paymentTypes"] = $model->paymentTypes;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
