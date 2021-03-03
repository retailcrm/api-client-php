<?php

function serialize_RetailCrm_Api_Model_Response_References_PaymentStatusesResponse(RetailCrm\Api\Model\Response\References\PaymentStatusesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->paymentStatuses) {
    $jsonData["paymentStatuses"] = [];
foreach (array_keys($model->paymentStatuses) as $index19) {
    $jsonData["paymentStatuses"][$index19] = [];
if (null !== $model->paymentStatuses[$index19]->name) {
    $jsonData["paymentStatuses"][$index19]["name"] = $model->paymentStatuses[$index19]->name;
}
if (null !== $model->paymentStatuses[$index19]->code) {
    $jsonData["paymentStatuses"][$index19]["code"] = $model->paymentStatuses[$index19]->code;
}
if (null !== $model->paymentStatuses[$index19]->active) {
    $jsonData["paymentStatuses"][$index19]["active"] = $model->paymentStatuses[$index19]->active;
}
if (null !== $model->paymentStatuses[$index19]->defaultForCrm) {
    $jsonData["paymentStatuses"][$index19]["defaultForCrm"] = $model->paymentStatuses[$index19]->defaultForCrm;
}
if (null !== $model->paymentStatuses[$index19]->defaultForApi) {
    $jsonData["paymentStatuses"][$index19]["defaultForApi"] = $model->paymentStatuses[$index19]->defaultForApi;
}
if (null !== $model->paymentStatuses[$index19]->paymentComplete) {
    $jsonData["paymentStatuses"][$index19]["paymentComplete"] = $model->paymentStatuses[$index19]->paymentComplete;
}
if (null !== $model->paymentStatuses[$index19]->ordering) {
    $jsonData["paymentStatuses"][$index19]["ordering"] = $model->paymentStatuses[$index19]->ordering;
}
if (null !== $model->paymentStatuses[$index19]->description) {
    $jsonData["paymentStatuses"][$index19]["description"] = $model->paymentStatuses[$index19]->description;
}
if (null !== $model->paymentStatuses[$index19]->paymentTypes) {
    $jsonData["paymentStatuses"][$index19]["paymentTypes"] = [];
foreach (array_keys($model->paymentStatuses[$index19]->paymentTypes) as $index45) {
    $jsonData["paymentStatuses"][$index19]["paymentTypes"] = $model->paymentStatuses[$index19]->paymentTypes;
}

}

if (0 === \count($jsonData["paymentStatuses"][$index19])) {
    $jsonData["paymentStatuses"][$index19] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
