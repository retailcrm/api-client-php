<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Delivery_ShipmentPointListResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Delivery\ShipmentPointListResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Delivery\ShipmentPointListResponse();
if (isset($jsonData['result'])) {
    $model->result = [];
foreach (array_keys($jsonData['result']) as $index19) {
    
$model->result[$index19] = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['result'][$index19]['code'])) {
    $model->result[$index19]->code = $jsonData['result'][$index19]['code'];

}
if (isset($jsonData['result'][$index19]['cost'])) {
    $model->result[$index19]->cost = (float) $jsonData['result'][$index19]['cost'];

}
if (isset($jsonData['result'][$index19]['name'])) {
    $model->result[$index19]->name = $jsonData['result'][$index19]['name'];

}
if (isset($jsonData['result'][$index19]['description'])) {
    $model->result[$index19]->description = $jsonData['result'][$index19]['description'];

}
if (isset($jsonData['result'][$index19]['address'])) {
    $model->result[$index19]->address = $jsonData['result'][$index19]['address'];

}
if (isset($jsonData['result'][$index19]['schedule'])) {
    $model->result[$index19]->schedule = $jsonData['result'][$index19]['schedule'];

}
if (isset($jsonData['result'][$index19]['phone'])) {
    $model->result[$index19]->phone = $jsonData['result'][$index19]['phone'];

}
if (isset($jsonData['result'][$index19]['extraData'])) {
    $model->result[$index19]->extraData = [];
foreach (array_keys($jsonData['result'][$index19]['extraData']) as $index42) {
    $model->result[$index19]->extraData[$index42] = $jsonData['result'][$index19]['extraData'][$index42];

}

}
if (isset($jsonData['result'][$index19]['coordinates'])) {
    
$model->result[$index19]->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['result'][$index19]['coordinates']['latitude'])) {
    $model->result[$index19]->coordinates->latitude = (float) $jsonData['result'][$index19]['coordinates']['latitude'];

}
if (isset($jsonData['result'][$index19]['coordinates']['longitude'])) {
    $model->result[$index19]->coordinates->longitude = (float) $jsonData['result'][$index19]['coordinates']['longitude'];

}


}


}

}



    return $model;
}
