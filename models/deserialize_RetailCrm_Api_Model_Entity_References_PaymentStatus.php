<?php

function deserialize_RetailCrm_Api_Model_Entity_References_PaymentStatus(array $jsonData): RetailCrm\Api\Model\Entity\References\PaymentStatus
{
    
$model = new RetailCrm\Api\Model\Entity\References\PaymentStatus();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['defaultForCrm'])) {
    $model->defaultForCrm = $jsonData['defaultForCrm'];

}
if (isset($jsonData['defaultForApi'])) {
    $model->defaultForApi = $jsonData['defaultForApi'];

}
if (isset($jsonData['paymentComplete'])) {
    $model->paymentComplete = $jsonData['paymentComplete'];

}
if (isset($jsonData['ordering'])) {
    $model->ordering = $jsonData['ordering'];

}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}
if (isset($jsonData['paymentTypes'])) {
    $model->paymentTypes = [];
foreach (array_keys($jsonData['paymentTypes']) as $index25) {
    $model->paymentTypes[$index25] = $jsonData['paymentTypes'][$index25];

}

}



    return $model;
}
