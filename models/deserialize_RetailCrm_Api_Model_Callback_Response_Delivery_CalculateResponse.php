<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Delivery_CalculateResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Delivery\CalculateResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Delivery\CalculateResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['result'])) {
    $model->result = [];
foreach (array_keys($jsonData['result']) as $index19) {
    
$model->result[$index19] = new RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseCalculate();
if (isset($jsonData['result'][$index19]['code'])) {
    $model->result[$index19]->code = $jsonData['result'][$index19]['code'];

}
if (isset($jsonData['result'][$index19]['group'])) {
    $model->result[$index19]->group = $jsonData['result'][$index19]['group'];

}
if (isset($jsonData['result'][$index19]['name'])) {
    $model->result[$index19]->name = $jsonData['result'][$index19]['name'];

}
if (isset($jsonData['result'][$index19]['type'])) {
    $model->result[$index19]->type = $jsonData['result'][$index19]['type'];

}
if (isset($jsonData['result'][$index19]['description'])) {
    $model->result[$index19]->description = $jsonData['result'][$index19]['description'];

}
if (isset($jsonData['result'][$index19]['cost'])) {
    $model->result[$index19]->cost = (float) $jsonData['result'][$index19]['cost'];

}
if (isset($jsonData['result'][$index19]['minTerm'])) {
    $model->result[$index19]->minTerm = $jsonData['result'][$index19]['minTerm'];

}
if (isset($jsonData['result'][$index19]['maxTerm'])) {
    $model->result[$index19]->maxTerm = $jsonData['result'][$index19]['maxTerm'];

}
if (isset($jsonData['result'][$index19]['extraData'])) {
    $model->result[$index19]->extraData = [];
foreach (array_keys($jsonData['result'][$index19]['extraData']) as $index42) {
    $model->result[$index19]->extraData[$index42] = $jsonData['result'][$index19]['extraData'][$index42];

}

}
if (isset($jsonData['result'][$index19]['extraDataAvailable'])) {
    $model->result[$index19]->extraDataAvailable = [];
foreach (array_keys($jsonData['result'][$index19]['extraDataAvailable']) as $index51) {
    $model->result[$index19]->extraDataAvailable[$index51] = $jsonData['result'][$index19]['extraDataAvailable'][$index51];

}

}
if (isset($jsonData['result'][$index19]['pickuppointList'])) {
    $model->result[$index19]->pickuppointList = [];
foreach (array_keys($jsonData['result'][$index19]['pickuppointList']) as $index48) {
    
$model->result[$index19]->pickuppointList[$index48] = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['code'])) {
    $model->result[$index19]->pickuppointList[$index48]->code = $jsonData['result'][$index19]['pickuppointList'][$index48]['code'];

}
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['cost'])) {
    $model->result[$index19]->pickuppointList[$index48]->cost = (float) $jsonData['result'][$index19]['pickuppointList'][$index48]['cost'];

}
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['name'])) {
    $model->result[$index19]->pickuppointList[$index48]->name = $jsonData['result'][$index19]['pickuppointList'][$index48]['name'];

}
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['description'])) {
    $model->result[$index19]->pickuppointList[$index48]->description = $jsonData['result'][$index19]['pickuppointList'][$index48]['description'];

}
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['address'])) {
    $model->result[$index19]->pickuppointList[$index48]->address = $jsonData['result'][$index19]['pickuppointList'][$index48]['address'];

}
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['schedule'])) {
    $model->result[$index19]->pickuppointList[$index48]->schedule = $jsonData['result'][$index19]['pickuppointList'][$index48]['schedule'];

}
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['phone'])) {
    $model->result[$index19]->pickuppointList[$index48]->phone = $jsonData['result'][$index19]['pickuppointList'][$index48]['phone'];

}
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['extraData'])) {
    $model->result[$index19]->pickuppointList[$index48]->extraData = [];
foreach (array_keys($jsonData['result'][$index19]['pickuppointList'][$index48]['extraData']) as $index71) {
    $model->result[$index19]->pickuppointList[$index48]->extraData[$index71] = $jsonData['result'][$index19]['pickuppointList'][$index48]['extraData'][$index71];

}

}
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['coordinates'])) {
    
$model->result[$index19]->pickuppointList[$index48]->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['coordinates']['latitude'])) {
    $model->result[$index19]->pickuppointList[$index48]->coordinates->latitude = (float) $jsonData['result'][$index19]['pickuppointList'][$index48]['coordinates']['latitude'];

}
if (isset($jsonData['result'][$index19]['pickuppointList'][$index48]['coordinates']['longitude'])) {
    $model->result[$index19]->pickuppointList[$index48]->coordinates->longitude = (float) $jsonData['result'][$index19]['pickuppointList'][$index48]['coordinates']['longitude'];

}


}


}

}


}

}



    return $model;
}
