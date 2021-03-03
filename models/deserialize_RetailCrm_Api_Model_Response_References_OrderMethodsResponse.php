<?php

function deserialize_RetailCrm_Api_Model_Response_References_OrderMethodsResponse(array $jsonData): RetailCrm\Api\Model\Response\References\OrderMethodsResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\OrderMethodsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['orderMethods'])) {
    $model->orderMethods = [];
foreach (array_keys($jsonData['orderMethods']) as $index25) {
    
$model->orderMethods[$index25] = new RetailCrm\Api\Model\Entity\References\OrderMethod();
if (isset($jsonData['orderMethods'][$index25]['name'])) {
    $model->orderMethods[$index25]->name = $jsonData['orderMethods'][$index25]['name'];

}
if (isset($jsonData['orderMethods'][$index25]['code'])) {
    $model->orderMethods[$index25]->code = $jsonData['orderMethods'][$index25]['code'];

}
if (isset($jsonData['orderMethods'][$index25]['active'])) {
    $model->orderMethods[$index25]->active = $jsonData['orderMethods'][$index25]['active'];

}
if (isset($jsonData['orderMethods'][$index25]['defaultForCrm'])) {
    $model->orderMethods[$index25]->defaultForCrm = $jsonData['orderMethods'][$index25]['defaultForCrm'];

}
if (isset($jsonData['orderMethods'][$index25]['defaultForApi'])) {
    $model->orderMethods[$index25]->defaultForApi = $jsonData['orderMethods'][$index25]['defaultForApi'];

}
if (isset($jsonData['orderMethods'][$index25]['isFromPos'])) {
    $model->orderMethods[$index25]->isFromPos = $jsonData['orderMethods'][$index25]['isFromPos'];

}


}

}



    return $model;
}
