<?php

function deserialize_RetailCrm_Api_Model_Response_References_DeliveryTypesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\DeliveryTypesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\DeliveryTypesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['deliveryTypes'])) {
    $model->deliveryTypes = [];
foreach (array_keys($jsonData['deliveryTypes']) as $index26) {
    
$model->deliveryTypes[$index26] = new RetailCrm\Api\Model\Entity\References\DeliveryType();
if (isset($jsonData['deliveryTypes'][$index26]['name'])) {
    $model->deliveryTypes[$index26]->name = $jsonData['deliveryTypes'][$index26]['name'];

}
if (isset($jsonData['deliveryTypes'][$index26]['code'])) {
    $model->deliveryTypes[$index26]->code = $jsonData['deliveryTypes'][$index26]['code'];

}
if (isset($jsonData['deliveryTypes'][$index26]['active'])) {
    $model->deliveryTypes[$index26]->active = $jsonData['deliveryTypes'][$index26]['active'];

}
if (isset($jsonData['deliveryTypes'][$index26]['defaultCost'])) {
    $model->deliveryTypes[$index26]->defaultCost = (float) $jsonData['deliveryTypes'][$index26]['defaultCost'];

}
if (isset($jsonData['deliveryTypes'][$index26]['defaultNetCost'])) {
    $model->deliveryTypes[$index26]->defaultNetCost = (float) $jsonData['deliveryTypes'][$index26]['defaultNetCost'];

}
if (isset($jsonData['deliveryTypes'][$index26]['description'])) {
    $model->deliveryTypes[$index26]->description = $jsonData['deliveryTypes'][$index26]['description'];

}
if (isset($jsonData['deliveryTypes'][$index26]['paymentTypes'])) {
    $model->deliveryTypes[$index26]->paymentTypes = [];
foreach (array_keys($jsonData['deliveryTypes'][$index26]['paymentTypes']) as $index52) {
    $model->deliveryTypes[$index26]->paymentTypes[$index52] = $jsonData['deliveryTypes'][$index26]['paymentTypes'][$index52];

}

}
if (isset($jsonData['deliveryTypes'][$index26]['integrationCode'])) {
    $model->deliveryTypes[$index26]->integrationCode = $jsonData['deliveryTypes'][$index26]['integrationCode'];

}
if (isset($jsonData['deliveryTypes'][$index26]['deliveryServices'])) {
    $model->deliveryTypes[$index26]->deliveryServices = [];
foreach (array_keys($jsonData['deliveryTypes'][$index26]['deliveryServices']) as $index56) {
    $model->deliveryTypes[$index26]->deliveryServices[$index56] = $jsonData['deliveryTypes'][$index26]['deliveryServices'][$index56];

}

}
if (isset($jsonData['deliveryTypes'][$index26]['defaultForCrm'])) {
    $model->deliveryTypes[$index26]->defaultForCrm = $jsonData['deliveryTypes'][$index26]['defaultForCrm'];

}
if (isset($jsonData['deliveryTypes'][$index26]['vatRate'])) {
    $model->deliveryTypes[$index26]->vatRate = $jsonData['deliveryTypes'][$index26]['vatRate'];

}
if (isset($jsonData['deliveryTypes'][$index26]['defaultTariffCode'])) {
    $model->deliveryTypes[$index26]->defaultTariffCode = $jsonData['deliveryTypes'][$index26]['defaultTariffCode'];

}
if (isset($jsonData['deliveryTypes'][$index26]['defaultTariffType'])) {
    $model->deliveryTypes[$index26]->defaultTariffType = $jsonData['deliveryTypes'][$index26]['defaultTariffType'];

}
if (isset($jsonData['deliveryTypes'][$index26]['defaultTariffName'])) {
    $model->deliveryTypes[$index26]->defaultTariffName = $jsonData['deliveryTypes'][$index26]['defaultTariffName'];

}


}

}



    return $model;
}
