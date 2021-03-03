<?php

function deserialize_RetailCrm_Api_Model_Entity_References_DeliveryType(array $jsonData): RetailCrm\Api\Model\Entity\References\DeliveryType
{
    
$model = new RetailCrm\Api\Model\Entity\References\DeliveryType();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['defaultCost'])) {
    $model->defaultCost = (float) $jsonData['defaultCost'];

}
if (isset($jsonData['defaultNetCost'])) {
    $model->defaultNetCost = (float) $jsonData['defaultNetCost'];

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
if (isset($jsonData['integrationCode'])) {
    $model->integrationCode = $jsonData['integrationCode'];

}
if (isset($jsonData['deliveryServices'])) {
    $model->deliveryServices = [];
foreach (array_keys($jsonData['deliveryServices']) as $index29) {
    $model->deliveryServices[$index29] = $jsonData['deliveryServices'][$index29];

}

}
if (isset($jsonData['defaultForCrm'])) {
    $model->defaultForCrm = $jsonData['defaultForCrm'];

}
if (isset($jsonData['vatRate'])) {
    $model->vatRate = $jsonData['vatRate'];

}
if (isset($jsonData['defaultTariffCode'])) {
    $model->defaultTariffCode = $jsonData['defaultTariffCode'];

}
if (isset($jsonData['defaultTariffType'])) {
    $model->defaultTariffType = $jsonData['defaultTariffType'];

}
if (isset($jsonData['defaultTariffName'])) {
    $model->defaultTariffName = $jsonData['defaultTariffName'];

}



    return $model;
}
