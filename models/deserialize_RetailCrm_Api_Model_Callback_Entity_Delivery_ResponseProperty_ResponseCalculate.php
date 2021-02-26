<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_ResponseProperty_ResponseCalculate(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseCalculate
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseCalculate();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['group'])) {
    $model->group = $jsonData['group'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}
if (isset($jsonData['cost'])) {
    $model->cost = (float) $jsonData['cost'];

}
if (isset($jsonData['minTerm'])) {
    $model->minTerm = $jsonData['minTerm'];

}
if (isset($jsonData['maxTerm'])) {
    $model->maxTerm = $jsonData['maxTerm'];

}
if (isset($jsonData['extraData'])) {
    $model->extraData = [];
foreach (array_keys($jsonData['extraData']) as $index22) {
    $model->extraData[$index22] = $jsonData['extraData'][$index22];

}

}
if (isset($jsonData['extraDataAvailable'])) {
    $model->extraDataAvailable = [];
foreach (array_keys($jsonData['extraDataAvailable']) as $index31) {
    $model->extraDataAvailable[$index31] = $jsonData['extraDataAvailable'][$index31];

}

}
if (isset($jsonData['pickuppointList'])) {
    $model->pickuppointList = [];
foreach (array_keys($jsonData['pickuppointList']) as $index28) {
    
$model->pickuppointList[$index28] = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['pickuppointList'][$index28]['code'])) {
    $model->pickuppointList[$index28]->code = $jsonData['pickuppointList'][$index28]['code'];

}
if (isset($jsonData['pickuppointList'][$index28]['cost'])) {
    $model->pickuppointList[$index28]->cost = (float) $jsonData['pickuppointList'][$index28]['cost'];

}
if (isset($jsonData['pickuppointList'][$index28]['name'])) {
    $model->pickuppointList[$index28]->name = $jsonData['pickuppointList'][$index28]['name'];

}
if (isset($jsonData['pickuppointList'][$index28]['description'])) {
    $model->pickuppointList[$index28]->description = $jsonData['pickuppointList'][$index28]['description'];

}
if (isset($jsonData['pickuppointList'][$index28]['address'])) {
    $model->pickuppointList[$index28]->address = $jsonData['pickuppointList'][$index28]['address'];

}
if (isset($jsonData['pickuppointList'][$index28]['schedule'])) {
    $model->pickuppointList[$index28]->schedule = $jsonData['pickuppointList'][$index28]['schedule'];

}
if (isset($jsonData['pickuppointList'][$index28]['phone'])) {
    $model->pickuppointList[$index28]->phone = $jsonData['pickuppointList'][$index28]['phone'];

}
if (isset($jsonData['pickuppointList'][$index28]['extraData'])) {
    $model->pickuppointList[$index28]->extraData = [];
foreach (array_keys($jsonData['pickuppointList'][$index28]['extraData']) as $index51) {
    $model->pickuppointList[$index28]->extraData[$index51] = $jsonData['pickuppointList'][$index28]['extraData'][$index51];

}

}
if (isset($jsonData['pickuppointList'][$index28]['coordinates'])) {
    
$model->pickuppointList[$index28]->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['pickuppointList'][$index28]['coordinates']['latitude'])) {
    $model->pickuppointList[$index28]->coordinates->latitude = (float) $jsonData['pickuppointList'][$index28]['coordinates']['latitude'];

}
if (isset($jsonData['pickuppointList'][$index28]['coordinates']['longitude'])) {
    $model->pickuppointList[$index28]->coordinates->longitude = (float) $jsonData['pickuppointList'][$index28]['coordinates']['longitude'];

}


}


}

}



    return $model;
}
