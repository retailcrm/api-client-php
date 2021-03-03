<?php

function deserialize_RetailCrm_Api_Model_Response_References_PaymentStatusesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\PaymentStatusesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\PaymentStatusesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['paymentStatuses'])) {
    $model->paymentStatuses = [];
foreach (array_keys($jsonData['paymentStatuses']) as $index28) {
    
$model->paymentStatuses[$index28] = new RetailCrm\Api\Model\Entity\References\PaymentStatus();
if (isset($jsonData['paymentStatuses'][$index28]['name'])) {
    $model->paymentStatuses[$index28]->name = $jsonData['paymentStatuses'][$index28]['name'];

}
if (isset($jsonData['paymentStatuses'][$index28]['code'])) {
    $model->paymentStatuses[$index28]->code = $jsonData['paymentStatuses'][$index28]['code'];

}
if (isset($jsonData['paymentStatuses'][$index28]['active'])) {
    $model->paymentStatuses[$index28]->active = $jsonData['paymentStatuses'][$index28]['active'];

}
if (isset($jsonData['paymentStatuses'][$index28]['defaultForCrm'])) {
    $model->paymentStatuses[$index28]->defaultForCrm = $jsonData['paymentStatuses'][$index28]['defaultForCrm'];

}
if (isset($jsonData['paymentStatuses'][$index28]['defaultForApi'])) {
    $model->paymentStatuses[$index28]->defaultForApi = $jsonData['paymentStatuses'][$index28]['defaultForApi'];

}
if (isset($jsonData['paymentStatuses'][$index28]['paymentComplete'])) {
    $model->paymentStatuses[$index28]->paymentComplete = $jsonData['paymentStatuses'][$index28]['paymentComplete'];

}
if (isset($jsonData['paymentStatuses'][$index28]['ordering'])) {
    $model->paymentStatuses[$index28]->ordering = $jsonData['paymentStatuses'][$index28]['ordering'];

}
if (isset($jsonData['paymentStatuses'][$index28]['description'])) {
    $model->paymentStatuses[$index28]->description = $jsonData['paymentStatuses'][$index28]['description'];

}
if (isset($jsonData['paymentStatuses'][$index28]['paymentTypes'])) {
    $model->paymentStatuses[$index28]->paymentTypes = [];
foreach (array_keys($jsonData['paymentStatuses'][$index28]['paymentTypes']) as $index54) {
    $model->paymentStatuses[$index28]->paymentTypes[$index54] = $jsonData['paymentStatuses'][$index28]['paymentTypes'][$index54];

}

}


}

}



    return $model;
}
